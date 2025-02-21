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
    <li><strong>Name</strong> : <?php echo e($booking->user->name); ?></li>
    <li><strong>Email</strong> : <?php echo e($booking->user->email); ?></li>
    <li><strong>Service</strong> : <?php echo e($booking->service->name); ?></li>
    <li><strong>Amount</strong> : $<?php echo e($booking->payment->amount); ?></li>
    <li><strong>Date / Time</strong> : <?php echo e($booking->date . ' / ' . $booking->time); ?></li>
    <li><strong>Payment Method</strong> : <?php echo e(ucfirst($booking->payment->method)); ?></li>

</ul>
</body>
</html>
<?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/mails/booking.blade.php ENDPATH**/ ?>