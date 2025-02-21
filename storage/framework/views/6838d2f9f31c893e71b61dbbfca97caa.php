<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="card-body">
        <a href="#" class="mb-3 d-flex justify-content-center">
            <!--Logo start-->
            <img src="<?php echo e(asset('assets/img/logo.png')); ?>" height="150" width="150" alt="">
            <!--logo End-->
        </a>
        <h2 class="mb-2 text-white text-center">Sign In</h2>
        <p class="text-center">Login to stay connected.</p>
        <form action="<?php echo e(route('admin.login.submit')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php echo e(old('email')); ?>" aria-describedby="email" placeholder=" ">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder=" ">
                    </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-between">
                    <div class="form-check mb-3">
                        <input type="checkbox" name="remember" class="form-check-input" id="customCheck1">
                        <label class="form-check-label" for="customCheck1">Remember Me</label>
                    </div>
                    <a href="#">Forgot Password?</a>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>

        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>