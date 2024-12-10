<?php $__env->startSection('title'); ?>
    Service <?php echo e($service->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Service <?php echo e($service->name); ?></h4>
                        </div>
                        <a class="btn btn-primary" href="<?php echo e(route('admin.services.index')); ?>">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="user-profile">
                                <img src="<?php echo e(Storage::url($service->image)); ?>" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                            </div>
                            <div class="mt-3">
                                <h3 class="d-inline-block"><?php echo e($service->name); ?></h3>
                                <p><?php echo e(ucwords($service->type)); ?></p>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">About Service</h4>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="mt-2">
                            <h6 class="mb-1">Created:</h6>
                            <p><?php echo e($service->created_at->format('M d, Y')); ?></p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Price ($):</h6>
                            <p><?php echo e($service->price); ?></p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Deposit Price ($):</h6>
                            <p><?php echo e($service->deposit_price); ?></p>
                        </div>

                        <div class="mt-2">
                            <h6 class="mb-1">Description:</h6>
                            <div>
                                <?php echo e($service->description); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/services/show.blade.php ENDPATH**/ ?>