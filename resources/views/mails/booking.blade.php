<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: "Arial", sans-serif;
        }
    </style>
</head>
<body>
<h2>Booking Confirmation from Caro Hair Braiding</h2>
<p>These are your booking details :</p>
<ul>
    <li><strong>Name</strong> : {{ $booking->user->name }}</li>
    <li><strong>Email</strong> : {{ $booking->user->email }}</li>
    <li><strong>Service</strong> : {{ $booking->service->name }}</li>
    <li><strong>Amount</strong> : ${{ $booking->payment->amount }}</li>
    <li><strong>Date / Time</strong> : {{ $booking->date . ' / ' . $booking->time }}</li>
    <li><strong>Payment Method</strong> : {{ ucfirst($booking->payment->method) }}</li>

</ul>
</body>
</html>
