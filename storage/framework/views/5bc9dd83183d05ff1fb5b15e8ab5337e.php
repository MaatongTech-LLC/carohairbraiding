<?php $__env->startSection('title'); ?>
    Booking
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper background-image" style="background-image: url(<?php echo e(asset('assets/img/hero/hero_bg_1_3.png')); ?>);">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Booking</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Booking</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="product-details space-top space-extra-bottom bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img">
                            <img src="<?php echo e(Storage::url($service->image)); ?>" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-about">
                        <p class="price">$<?php echo e($service->price); ?></p>
                        <h2 class="product-title"><?php echo e(ucwords($service->name)); ?></h2>

                        <p class="text">
                           <?php echo e($service->description); ?>

                        </p>
                        <div class="product_meta mt-4">
                            <span class="posted_in">Type: <a href="#" rel="tag"><?php echo e(ucwords($service->type)); ?></a></span>
                            <span class="">Duration: <a href="#" rel="tag"><?php echo e($service->duration); ?></a></span>
                        </div>
                        <form action="<?php echo e(route('checkout')); ?>">
                            <div class="actions">
                                <input type="hidden" value="<?php echo e($service->id); ?>" name="service_id">
                                <div class="form-group col-12">
                                    <label class="mb-2" for="date-pick">Date</label>
                                    <input type="text" class="date-pick form-control" name="date" id="date-pick"
                                           placeholder="Select Date" required/>
                                </div>
                                <div class="form-group col-12">
                                    <label class="mb-2" for="time-pick">Time</label>
                                    <input type="text" class="time-pick form-control" name="time" id="time-pick"
                                           placeholder="Select Time" required/>
                                </div>

                                <div class="wc_payment_method payment_method_cod">
                                    <input id="price" type="radio" class="input-radio" value="full_price" name="pay_price" required> <label
                                        for="price">Pay full amount <strong>($<?php echo e($service->price); ?>)</strong></label>
                                    <div class="payment_box payment_method_cod"><p>Pay the service full amount.</p></div>
                                </div>
                                <div class="wc_payment_method payment_method_cod">
                                    <input id="deposit_price" type="radio" class="input-radio" value="deposit" name="pay_price" required> <label
                                        for="deposit_price">Pay deposit <strong>($<?php echo e($service->deposit_price); ?>)</strong></label>
                                    <div class="payment_box payment_method_cod"><p>Pay for the booking deposit.</p></div>
                                </div>

                            </div>
                            <button type="submit" class="th-btn">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- Include Mobiscroll -->
    <script src="js/mobiscroll.javascript.min.js"></script>
    <link href="css/mobiscroll.javascript.min.css" rel="stylesheet" type="text/css">

    <script>

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/booking.blade.php ENDPATH**/ ?>