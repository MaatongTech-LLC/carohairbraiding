<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\User;
use Stripe\Customer;
use App\Mail\Contact;
use App\Models\Booking;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Category;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Events\BookingConfirmedEvent;
use App\Notifications\ClientBookingReceipt;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AdminBookingNotification;
use Srmklive\PayPal\Services\PayPal as PayPalClient;


class HomeController extends Controller
{
    public $hul;

    public function index()
    {
        $services = Service::all();
        $menServices = Service::where('type', 'men')->get();
        $womenServices = Service::where('type', 'women')->get();
        $kidsServices = Service::where('type', 'kids')->get();

        $data = compact('menServices', 'womenServices', 'kidsServices', 'services');
        return view('home', ['data' => $data]);
    }

    public function about()
    {
        return view('about');
    }

    public function services(Request $request)
    {
        if ($request->has('category_id')) {
            $services = Service::where('category_id', $request->category_id)->latest()->paginate(9);
        } else {
            $services = Service::latest()->paginate(9);
        }

        $categories = Category::all();

        return view('services', compact('services', 'categories'));
    }

    public function categories()
    {
        $categories = Category::with(['services' => function ($query) {
            $query->select('category_id', DB::raw('MIN(price) as min_price'))
                ->groupBy('category_id');
        }])->latest()->simplePaginate(4);

        return view('categories', compact('categories'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function booking($id)
    {
        $service = Service::findOrFail($id);

        return view('booking', compact('service'));
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'pay_price' => 'required',
            'date' => 'required|after:yesterday',
            'time' => 'required',
        ]);

        if ($request->service_id) {
            $id = $request->service_id;
        } else {
            abort(404);
        }

        $service = Service::findOrFail($id);

        if ($request->pay_price) $pay_price = $request->pay_price === 'deposit' ? $service->deposit_price : $service->price;
        if ($request->date) $date = $request->date;
        if ($request->time) $time = $request->time;

        return view('checkout', compact('service', 'pay_price', 'date', 'time'));
    }

    public function checkoutPay(Request $request, $id)
    {
        if ($request->payment_method === 'paypal') {
            $data = $request->validate([
                'full_name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'city' => 'required',
                'state' => 'required',
                'amount' => 'required',
                'date' => 'required|date_format:Y-m-d|after:yesterday',
                'time' => 'required',
                'pay_price' => 'required',
                'payment_method' => 'required',
            ]);

            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();

            $user_id = $this->createOrGetClient($data);

            $booking_id = $this->saveBooking($user_id, $data['date'], $data['time'], $data['pay_price'], $id);

            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('paypal.payment.success', $booking_id),
                    "cancel_url" => route('paypal.payment.cancel'),
                ],
                "purchase_units" => [
                    0 => [
                        "amount" => [
                            "currency_code" => "USD",
                            "value" => $data['amount']
                        ]
                    ]
                ]
            ]);

            if (isset($response['id']) & $response['id'] != null) {

                foreach ($response['links'] as $links) {
                    if ($links['rel'] == 'approve') {
                        return redirect()->away($links['href']);
                    }
                }

                toast($response['message'] ?? 'Something went wrong.', 'error');
                return redirect()
                    ->back();

            } else {
                toast($response['message'] ?? 'Something went wrong.', 'error');
                return redirect()
                    ->back();
            }
        }

    }

    public function paypalSuccess(Request $request, $booking_id)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);


        if (isset($response['status']) & $response['status'] == 'COMPLETED') {
            $booking = Booking::with(['service'])->where('id', $booking_id)->first();

            $amount = $booking->type === 'deposit'
                ? $booking->service->deposit_price
                : $booking->service->price;

            $this->savePayment($booking_id, 'PayPal', $amount);

            // Notify the admin
            Notification::route('mail', env('ADMIN_EMAIL'))->notify(new AdminBookingNotification($booking));

            // Notify the client
            Notification::route('mail', $booking->user->email)->notify(new ClientBookingReceipt($booking));

            toast('Transaction completed.' . PHP_EOL . 'Check your email address', 'success');
            return redirect()
                ->route('home');
        } else {
            toast($response['message'] ?? 'Something went wrong', 'error');
            return redirect()
                ->route('home');
        }
    }

    public function paypalCancel(Request $request)
    {
        toast($response['message'] ?? 'You have canceled the transaction.', 'error');
        return redirect()
            ->back();
    }

    public function stripePost(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required',
            'amount' => 'required|numeric',
            'pay_price' => 'required',
            'full_name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'date' => 'required|date_format:Y-m-d|after:yesterday',
            'time' => 'required',
        ]);

        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Get the payment amount and email address from the form.
        $amount = $request->input('amount') * 100;
        $email = $request->input('email');


        DB::transaction(function () use ($data, $amount) {
            $user_id = $this->createOrGetClient($data);

            $booking_id = $this->saveBooking($user_id, $data['date'], $data['time'], $data['pay_price'], $data['service_id']);

            $this->hul = Booking::find($booking_id);

            $this->savePayment($booking_id, 'Credit Card', $amount / 100);
        });

        // Create customer
        Customer::create([
            'email' => $email,
            'source' => $request->input('stripeToken'),
        ]);

        // Create a new Stripe charge.
        PaymentIntent::create([
            'amount' => $amount * 100,
            'currency' => 'usd',
        ]);

        $booking = $this->hul;

         // Notify the admin
         Notification::route('mail', env('ADMIN_EMAIL'))->notify(new AdminBookingNotification($booking));

         // Notify the client
         Notification::route('mail', $booking->user->email)->notify(new ClientBookingReceipt($booking));

        toast('Payment with credit card successful.' . PHP_EOL . 'Check your email address', 'success');

        return redirect()->route('home');

    }


    private function createOrGetClient(array $data)
    {
        $user = User::where('email', $data['email'])->first();

        if ($user == null) {
            $user = User::firstOrCreate([
                'name' => $data['full_name'],
                'email' => $data['email'],
                'password' => Hash::make(rand(100000, 999999)),
                'phone' => $data['phone'],
                'role' => 'client'
            ]);
        }


        return $user->id;

    }

    private function saveBooking($user_id, $date, $time, $type, $service_id)
    {
        $booking = Booking::create([
            'user_id' => $user_id,
            'service_id' => $service_id,
            'date' => $date,
            'time' => $time,
            'type' => $type,
        ]);


        return $booking->id;
    }

    private function savePayment($booking_id, $method, $amount)
    {
        Payment::create([
            'booking_id' => $booking_id,
            'amount' => $amount,
            'method' => $method,
        ]);
    }

    public function contactPost(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new Contact($validated));

        toast('We received your message!', 'success');

        return redirect()->back();

    }
}
