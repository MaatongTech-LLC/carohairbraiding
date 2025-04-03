
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
                    <h2 class="sec-title text-white">Discover the amazing services you can get with us</h2>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-1">
                    <a href="<?php echo e(route('services')); ?>" class="my-tab-btn <?php echo e(request('category_id') == null ? 'active' : ''); ?> mb-2">
                        ALL
                    </a>

                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('services', ['category_id' => $category])); ?>" class="my-tab-btn <?php echo e(request('category_id') == $category->id ? 'active' : ''); ?> mb-2">
                            <?php echo e(ucwords($category->name)); ?>

                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <span class="indicator" style="--height-set: 46px; --width-set: 56.9219px; --pos-y: 483.484375px; --pos-x: 19.5625px;"></span>
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

                <?php $__empty_1 = true; $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h4 class="text-center sec-title text-white">No Service Yet</h4>
                <?php endif; ?>

                <div class="mt-4 pt-5">
                    <?php echo e($services->links('vendor.pagination.default', ['elements' => $services])); ?>

                </div>

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

<?php $__env->startPush('styles'); ?>
    <style>
        .my-tab-btn {
            background-color: transparent;
            color: var(--theme-color);
            border: 1px solid var(--theme-color);
            font-size: 14px;
            font-weight: 500;
            padding: 4px 20px;
            margin-left: 10px;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .my-tab-btn:hover, .my-tab-btn.active {
            background-color: var(--theme-color);
            color: #FFF;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/services.blade.php ENDPATH**/ ?>