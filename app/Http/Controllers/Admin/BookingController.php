<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\BookingsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    public function calendar()
    {
        $bookings = Booking::with(['service', 'user'])->get();

        $bookings = $bookings->map(function ($booking) {
            // Fusionner la date et l'heure de début
            $start = Carbon::parse($booking->date . ' ' . $booking->time);

            // Calculer l'heure de fin en ajoutant la durée
            // Si la durée est stockée sous forme de chaîne "HH:MM:SS"
            $duration = Carbon::parse($booking->service->duration); // durée comme "HH:MM:SS"
            $end = $start->copy()->addHours($duration->hour)->addMinutes($duration->minute)->addSeconds($duration->second);

            // Stocker les données de début et de fin
            $booking->start = $start->format('Y-m-d\TH:i:s'); // Format ISO8601
            $booking->end = $end->format('Y-m-d\TH:i:s'); // Format ISO8601

            $booking->title = $booking->service->name . ' (' . $booking->user->name . ')';
            $booking->url = route('admin.booking.show', $booking->id);

            return $booking;
        });

        return view('admin.booking.calendar', ['bookings' => json_encode($bookings)]);
    }

    public function index(BookingsDataTable $dataTable)
    {
        return $dataTable->render('admin.booking.index');
    }

    public function show($id)
    {
        $booking = Booking::with(['service', 'user', 'payment'])->findOrFail($id);

        if ($booking->status === 'unread') {
            $booking->status = 'read';

            $booking->save();
        }

        return view('admin.booking.show', compact('booking'));
    }
}
