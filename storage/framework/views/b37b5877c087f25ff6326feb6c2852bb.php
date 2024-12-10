<?php $__env->startSection('title'); ?>
    Client <?php echo e($client->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid content-inner mt-n5 py-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Client Profile</h4>
                        </div>
                        <a class="btn btn-primary" href="<?php echo e(route('admin.clients.index')); ?>">Back</a>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="user-profile">
                                <img src="<?php echo e(asset('admin/assets/images/avatars/01.png')); ?>" alt="profile-img" class="rounded-pill avatar-130 img-fluid">
                            </div>
                            <div class="mt-3">
                                <h3 class="d-inline-block"><?php echo e($client->name); ?></h3>
                                <p class="d-inline-block pl-3"></p>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title">About Client</h4>
                        </div>

                    </div>
                    <div class="card-body">

                        <div class="mt-2">
                            <h6 class="mb-1">Joined:</h6>
                            <p><?php echo e($client->created_at->format('M d, Y')); ?></p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Lives:</h6>
                            <p>United States of America</p>
                        </div>
                        <div class="mt-2">
                            <h6 class="mb-1">Email:</h6>
                            <p><a href="#" class="text-body"><?php echo e($client->email); ?></a></p>
                        </div>

                        <div class="mt-2">
                            <h6 class="mb-1">Contact:</h6>
                            <p><a href="#" class="text-body">-</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/clients/show.blade.php ENDPATH**/ ?>