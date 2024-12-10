
<?php $__env->startSection('title'); ?>
    Services
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper background-image" style="background-image: url(<?php echo e(asset('assets/img/hero/hero_bg_1_3.png')); ?>);">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Services</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space shape-mockup-wrap">
        <div class="container">
            <div class="row gy-5">
                <div class="title-area mb-40 text-center text-xl-start">
                    <span class="sub-title">Our Services<img src="assets/img/theme-img/title_right.svg"
                                                                alt="" /></span>
                    <h2 class="sec-title text-white">Discover the amazing haircuts you can get with us</h2>
                </div>
                <?php
                    $directory = public_path('assets/img/services');
                    $images = array_map(function($file) {
                        return [
                            'path' => 'assets/img/services/'. basename($file),
                            'name' => pathinfo($file, PATHINFO_FILENAME)
                            ];
                    }, glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE));
                ?>

                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div>
                            <div class="service-box">
                                <div class="service-box_icon">
                                    <div class="global-icon">
                                        <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="Icon">
                                    </div>
                                </div>
                                <h5 class="box-title mb-2">
                                    <span><?php echo e(ucwords($service->name)); ?></span>
                                </h5>
                                <p class="service-box_text">
                                    <?php echo e($service->description); ?>

                                </p>

                            </div>
                            <div class="service-img">
                                <img class="h-100" style="min-height: 280px; max-height: 300px; object-fit: cover;" src="<?php echo e(Storage::url($service->image)); ?>" alt="Service">
                                <a  href="<?php echo e(route('booking', $service->id )); ?>" class="th-btn d-block">Book now</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" style="bottom: 15%; left: 0%;">
            <img src="assets/img/shape/leaves_1.png" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" style="top: 5%; right: 0%;">
            <img src="assets/img/shape/leaves_7.png" alt="shape">
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/services.blade.php ENDPATH**/ ?>