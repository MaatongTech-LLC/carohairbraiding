<?php $__env->startSection('title'); ?>
    Booking <?php echo e($booking->service->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Service <?php echo e($booking->service->name); ?></h4>
                        </div>
                        <a class="btn btn-primary" href="<?php echo e(route('admin.booking.index')); ?>">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="user-profile">
                                <img src="<?php echo e(Storage::url($booking->service->image)); ?>" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                            </div>
                            <div class="mt-3">
                                <h3 class="d-inline-block"><a href="<?php echo e(route('admin.services.show', $booking->service->id)); ?>"><?php echo e($booking->service->name); ?></a></h3>
                                <p><?php echo e(ucwords($booking->service->type)); ?></p>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">About Booking</h4>
                        </div>

                    </div>
                    <div class="card-body">


                        <div class="mt-2">
                            <h6 class="mb-1">Amount ($):</h6>
                            <p><?php echo e($booking->payment->amount); ?>

                                <?php echo e($booking->payment->amount === $booking->service->price ? '(Full Price)' : '(Deposit Price)'); ?>

                            </p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Payment Method:</h6>
                            <p><?php echo e($booking->payment->method); ?></p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Client Name/Email:</h6>
                            <p><a href="<?php echo e(route('admin.clients.show', $booking->user->id)); ?>"><?php echo e($booking->user->name); ?>/<?php echo e($booking->user->email); ?></a></p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Date:</h6>
                            <p><?php echo e($booking->date); ?></p>
                        </div>

                        <div class="mt-2">
                            <h6 class="mb-1">Time:</h6>
                            <div>
                                <?php echo e($booking->time); ?>

                            </div>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Booked On:</h6>
                            <p><?php echo e($booking->service->created_at->format('M d, Y')); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/booking/show.blade.php ENDPATH**/ ?>