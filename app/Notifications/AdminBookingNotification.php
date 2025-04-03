<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdminBookingNotification extends Notification
{
    use Queueable;

    public $booking;

    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        if ($this->booking->payment->amount === $this->booking->service->price) {
            $price = number_format($this->booking->service->price, 2) . ' ' . '(Full Price)';
        } else {
            $price = number_format($this->booking->service->deposit_price, 2) . ' ' . '(Deposit Price)';
        }

        return (new MailMessage)
            ->subject('New Booking Received')
            ->line('A new booking has been made by ' . $this->booking->user->name . '.')
            ->line('Service: ' . $this->booking->service->name)
            ->line('Date: ' . Carbon::parse($this->booking->date)->format('Y-m-d'))
            ->line('Time: ' . Carbon::parse($this->booking->time)->format('h:i'))
            ->line('Price: $' . $price)
            ->action('View Booking', route('admin.booking.show', $this->booking->id))
            ->line('Thank you for using our booking system!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
