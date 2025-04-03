<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Contact Mail</h2>
<p>You received an email with this information :</p>
<ul>
    <li><strong>Name</strong> : <?php echo e($data['name']); ?></li>
    <li><strong>Email</strong> : <?php echo e($data['email']); ?></li>
    <li><strong>Phone</strong> : <?php echo e($data['phone']); ?></li>
    <li><strong>Subject</strong> : <?php echo e($data['subject']); ?></li>
    <li><strong>Message</strong> : <?php echo e($data['message']); ?></li>
</ul>
</body>
</html>
<?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/mails/contact.blade.php ENDPATH**/ ?>