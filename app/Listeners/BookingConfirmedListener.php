<?php

namespace App\Listeners;

use App\Events\BookingConfirmedEvent;
use App\Mail\BookingConfirmation;
use App\Models\Booking;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class BookingConfirmedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(BookingConfirmedEvent $event): void
    {
        $booking = Booking::with(['payment', 'service', 'user'])->whereId($event->bookingId)->first();

        Mail::to($booking->user->email)->send(new BookingConfirmation($booking));

    }
}
