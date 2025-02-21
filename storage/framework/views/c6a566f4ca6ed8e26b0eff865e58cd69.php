<?php $__env->startSection('title'); ?>

    <?php $__env->startSection('content'); ?>
        <section class="space" data-bg-src=
            "assets/img/bg/price_bg_2.jpg">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title style2">Categories</span>
                    <img src="<?php echo e(asset('assets/img/theme-img/title_shape_1.svg')); ?>" alt="">
                    <h2 class="sec-title text-white">Choose From Our Categories</h2>
                </div>
                <div class="row gy-4 align-items-center">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-6">
                            <div class="price-card wow fadeInLeft">
                                <div class="price-card_img">
                                    <img src="<?php echo e(\Illuminate\Support\Facades\Storage::url($category->image)); ?>" class="" style="height: 100%!important;" alt="">
                                    <h4 class="price-card_price"><span class="currency">$</span> <?php echo e($category->services->first()->min_price ?? '0.00'); ?> <span class="duration">Starting from</span></h4>
                                </div>
                                <div class="price-card_content">
                                    <h3 class="box-title"><?php echo e($category->name); ?></h3>
                                    <hr class="style1">
                                    <div class="available-list">
                                        <ul>
                                            <?php $__empty_1 = true; $__currentLoopData = $category->services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <li><img src="<?php echo e(asset('assets/img/theme-img/title_left.svg')); ?>" alt=""><?php echo e($service->name); ?></li>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <li><img src="<?php echo e(asset('assets/img/theme-img/title_left.svg')); ?>" alt="">No Service Yet</li>
                                            <?php endif; ?>

                                        </ul>
                                        <div class="price-btn">
                                            <a href="<?php echo e(route('services', ['category_id' => $category->id])); ?>" class="th-btn">Discover Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="mt-4 pt-5">
                    <?php echo e($categories->links('vendor.pagination.default', ['elements' => $categories])); ?>

                </div>
            </div>
            <div class="shape-mockup jump d-none d-lg-block" data-top="5%"
                 data-left="0%">
                <img src="<?php echo e(asset('assets/img/shape/leaves_6.png')); ?>" alt="shape">
            </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/categories.blade.php ENDPATH**/ ?>