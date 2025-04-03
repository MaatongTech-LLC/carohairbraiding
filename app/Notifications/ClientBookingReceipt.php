<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Carbon;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ClientBookingReceipt extends Notification
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
            ->subject('Booking Confirmation')
            ->line('Thank you for booking with us!')
            ->line('Here are your booking details:')
            ->line('Service: ' . $this->booking->service->name)
            ->line('Date: ' . Carbon::parse($this->booking->date)->format('Y-m-d'))
            ->line('Time: ' . Carbon::parse($this->booking->time)->format('h:i'))
            ->line('Price: $' . $price)
            ->line('If you have any questions, please contact us.')
            ->line('Thank you for choosing us!');
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
