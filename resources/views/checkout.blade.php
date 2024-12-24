@extends('layouts.main')
@section('title')
    Checkout
@endsection

@section('content')
    <div class="breadcumb-wrapper background-image"
         style="background-image: url({{ asset('assets/img/hero/hero_bg_1_3.png') }});">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Checkout</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="th-checkout-wrapper space-top space-extra-bottom bg-white">
        <div class="container">
            <form action="{{ route('checkout.pay', $service->id) }}" method="POST" id="paymentForm" class="woocommerce-checkout mt-40">
                @csrf
                <input type="hidden" name="date" value="{{ $_GET['date'] }}">
                <input type="hidden" name="time" value="{{ $_GET['time'] }}">
                <input type="hidden" name="pay_price" value="{{ $_GET['pay_price'] }}">
                <div class="row">
                    <div class="col-lg-6"><h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <input type="hidden" name="amount" value="{{ $pay_price }}">
                            <div class="col-md-12 form-group">
                                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="Full Name"
                                       value="{{ $_GET['full_name'] ?? '' }}" required>
                            </div>

                            <div class="col-12 form-group">
                                <input type="text"  name="city" class="form-control" placeholder="Town / City" value=""
                                       required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" name="state" class="form-control" placeholder="State" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="postcode" type="text" class="form-control" placeholder="Postcode / Zip"
                                       required>
                            </div>
                            <div class="col-12 form-group"><input id="email" name="email" type="email" class="form-control"
                                                                  placeholder="Email Address"
                                                                  value="{{ $_GET['email'] ?? '' }}" required>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone number"
                                       value="{{ $_GET['phone'] ?? '' }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h4>Your Order</h4>
                        <table class="cart_table mb-20">
                            <thead>
                            <tr>
                                <th class="cart-col-image">Image</th>
                                <th class="cart-col-productname">Product Name</th>
                                <th class="cart-col-productname">Date</th>
                                <th class="cart-col-productname">Time</th>
                                <th class="cart-col-price">Price</th>
                                <th class="cart-col-total">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="cart_item">
                                <td data-title="Product"><a class="cart-productimage"
                                                            href="{{ route('booking', $service->id) }}"><img
                                            width="91"
                                            height="91"
                                            src="{{ Storage::url($service->image) }}"
                                            alt="Image"></a>
                                </td>
                                <td data-title="Name"><a class="cart-productname"
                                                         href="{{ route('booking', $service->id) }}">{{ucwords($service->name)}}</a>
                                </td>
                                <td data-title="Date"><span class="cart-productname">{{ $date }}</span>
                                </td>
                                <td data-title="Date"><span class="cart-productname">{{ $time }}</span>
                                </td>
                                <td data-title="Price"><span class="amount"><bdi><span>$</span>{{ $pay_price }}</bdi></span>
                                </td>
                                <td data-title="Total"><span class="amount"><bdi><span>$</span>{{ $pay_price }}</bdi></span>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot class="checkout-ordertable">
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td data-title="Subtotal" colspan="5"><span class="woocommerce-Price-amount amount"><bdi><span
                                                class="woocommerce-Price-currencySymbol">$</span>{{ $pay_price }}</bdi></span>
                                </td>
                            </tr>

                            <tr class="order-total">
                                <th>Total</th>
                                <td data-title="Total" colspan="5"><strong><span
                                            class="woocommerce-Price-amount amount"><bdi><span
                                                    class="woocommerce-Price-currencySymbol">$</span>{{ $pay_price }}</bdi></span></strong>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                        <div class="mt-lg-3 mb-30">
                            <div class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">

                                    <li class="wc_payment_method payment_method_stripe">
                                        <input id="payment_method_stripe"
                                               type="radio"
                                               value="stripe"
                                               class="input-radio"
                                               name="payment_method" checked required>
                                        <input type='hidden' name='stripeToken' id='stripe-token-id'>
                                        <label for="payment_method_stripe">Credit/Debit Card</label>
                                        <div class="payment_box payment_method_stripe"><p>Pay with your credit or debit card.</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_paypal"><input
                                            id="payment_method_paypal"
                                            type="radio" class="input-radio"
                                            name="payment_method" value="paypal" required>
                                        <label for="payment_method_paypal">Paypal</label>
                                        <div class="payment_box payment_method_paypal">
                                            <p>Pay via your PayPal account.</p>
                                            <strong>You will be redirected to PayPal payment page.</strong>
                                        </div>
                                    </li>
                                </ul>
                                <div class="form-row place-order">
                                    <button type="submit" class="th-btn">Place order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="stripePaymentModal" aria-hidden="true" aria-labelledby="stripePaymentModal"
         tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stripePaymentModalLabel">Pay with your Credit Card</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form

                        role="form"

                        action="{{ route('stripe') }}"

                        method="post"

                        class="require-validation"

                        data-cc-on-file="false"

                        data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"

                        id="payment-form">

                        @csrf

                        <input type="hidden" name="service_id" value="{{ $service->id }}">
                        <input type="hidden" name="amount" value="{{ $pay_price }}">
                        <input type="hidden" name="email" id="customer_email">
                        <input type="hidden" name="full_name" id="customer_name">
                        <input type="hidden" name="phone" id="customer_phone">
                        <input type="hidden" name="pay_price" value="{{ $_GET['pay_price'] }}">
                        <input type="hidden" name="date" value="{{ $_GET['date'] }}">
                        <input type="hidden" name="time" value="{{ $_GET['time'] }}">

                        <div class="form-group py-3 mb-2">
                            <label for="card-element">
                                Credit or debit card
                            </label>
                            <div id="card-element" class="py-2">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>

                        <button class="th-btn" type="submit">Pay Now (${{$pay_price}})</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">

        var stripe = Stripe('{{ env('STRIPE_KEY') }}')
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var stripePaymentModal = new bootstrap.Modal(document.getElementById('stripePaymentModal'));

        var paymentForm = document.getElementById('paymentForm');

        paymentForm.addEventListener('submit', function(event) {
            event.preventDefault();

            const paymentMethodStripe = document.getElementById('payment_method_stripe');
            const paymentMethodPaypal = document.getElementById('payment_method_paypal');

            if (paymentMethodStripe.checked) {
                const email = document.getElementById('email');
                const customerEmail = document.getElementById('customer_email');

                const fullName = document.getElementById('full_name');
                const customerName = document.getElementById('customer_name');

                const phone = document.getElementById('phone');
                const customerPhone = document.getElementById('customer_phone');

                customerEmail.value = email.value;
                customerName.value = fullName.value;
                customerPhone.value = phone.value;

                console.log(customerEmail.value);
                stripePaymentModal.show();
            }

            if (paymentMethodPaypal.checked) {
                event.target.submit();
            }
        });


    </script>
@endpush
