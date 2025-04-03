<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Notifications\BookingReminder;

class SendBookingReminders extends Command
{
    protected $signature = 'bookings:send-reminders';
    protected $description = 'Send booking reminders 24 hours before the booking date.';

    public function handle()
    {
        // Get bookings that are 24 hours from now
        $bookings = \App\Models\Booking::where('status', 'confirmed')
            ->with('user')
            ->whereDate('date', now()->addDay()->toDateString())
            ->get();


        foreach ($bookings as $booking) {
            // Send reminder notification
            $booking->user->notify(new BookingReminder($booking));
            $this->info('Reminder sent for booking ID: ' . $booking->id);
        }

        $this->info('Reminders sent successfully.');
    }
}
