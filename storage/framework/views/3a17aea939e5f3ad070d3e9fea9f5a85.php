
<?php $__env->startSection('title'); ?>
    About Us
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="breadcumb-wrapper background-image"
         style="background-image: url(<?php echo e(asset('assets/img/hero/hero_bg_1_3.png')); ?>);">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">About Us</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="about-sec overflow-hidden space mb-5" id="about-sec">
        <div class="container align-item-center">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box4">
                        <div class="img4 wow fadeInUp">
                            <img class="tilt-active" src="<?php echo e(asset('assets/img/normal/about_3_1.jpg')); ?>" alt="About" />
                        </div>
                        <div class="img5 wow fadeInRight">
                            <img height="274" width="350" style="object-fit: cover; height: 575px;" class="tilt-active"
                                 src="<?php echo e(asset('assets/img/normal/about_3_2.jpg')); ?>" alt="About" />
                        </div>
                        <div class="about-shape">
                            <img src="<?php echo e(asset('assets/img/normal/about_3_3.jpg')); ?>" alt="About" />
                        </div>
                        <div class="about-company-since-wrap">
                            <div class="about-icon">
                                <img src="<?php echo e(asset('assets/img/logo.png')); ?>" height="80" width="80" alt="logo" />
                            </div>
                            <div class="about-tag">
                                <span class="about-anime">Company Since 2019</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 wow fadeInUp">
                        <div class="title-area">
                        <span class="sub-title">About Us<img src="assets/img/theme-img/title_right.svg"
                                                             alt="" /></span>
                            <h2 class="sec-title text-white">
                                Welcome to Our Hair Salon We Will Change Your Look!
                            </h2>
                            <p class="about-desc">
                                We are committed to using high-quality hair care products to
                                ensure that your hair receives the best possible treatment.
                                From shampoos and conditioners to styling products.
                            </p>
                        </div>
                        <div class="about-counter">
                            <div class="th-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/img/icon/counter_2_1.svg" alt="" />
                                    </div>
                                    <div class="content">
                                        <h3 class="counter">
                                            <span class="odometer" data-count="20">00</span>
                                        </h3>
                                        <p class="counter-card_text text-white">Years of Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="th-counterup">
                                <div class="inner">
                                    <div class="icon">
                                        <img src="assets/img/icon/man.svg" alt="" />
                                    </div>
                                    <div class="content">
                                        <h3 class="counter">
                                            <span class="odometer" data-count="5">00</span>
                                        </h3>
                                        <p class="counter-card_text text-white">Our Awesome Expert</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space" style="background-color: white;" data-bg-src="<?php echo e(asset('assets/img/bg/choose_bg_1.jpg')); ?>">
        <div class="container">
            <div class="choose-title-area">
                <div class="title-area mb-40 text-center">
                    <span class="sub-title style2">Why Choose Us</span>
                    <img src="<?php echo e(asset('assets/img/theme-img/title_shape_1.svg')); ?>" alt="" />
                    <h2 class="sec-title">
                        Your Journey to Inner Harmony Starts Here Choose Our Salon &
                        Wellness
                    </h2>
                </div>
            </div>
            <div class="row pt-5 gy-4 align-items-center">
                <div class="col-xl-5">
                    <div class="title-area mb-40">
                        <h3 class="sec-title">
                            A Haven of Beauty and Wellness The Clear Choice for You
                        </h3>
                        <p>
                            Our beauty salon is a haven of elegance and expertise,
                            where we are committed to helping you look and feel your
                            best. With our expert beauty professionals, customized
                            beauty solutions, premium products, comprehensive
                            services, relaxing atmosphere, and focus on hygiene, we
                            invite you to visit us.
                        </p>
                        <a href="<?php echo e(route('services')); ?>" class="th-btn">Our Services</a>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="wow fadeInRight overflow-hidden" style=" padding: 0; border-top-right-radius: 85px; border-bottom-left-radius: 85px;">
                        <img style="height: 100%; width: 80%; object-fit: cover;" src="<?php echo e(asset('assets/img/normal/salon.jpg')); ?>" alt="why-us-image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-sec overflow-hidden space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <form action="mail.php" method="POST" class="quote-form ajax-contact">
                        <div class="title-area mb-40">
                            <span class="sub-title text-white">Contact Us<img src="assets/img/theme-img/title_right2.svg" alt=""></span>
                            <h3 class="sec-title text-white">Get In Touch</h3>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                <i class="fal fa-user"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                            <i class="fal fa-question"></i>
                        </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Write message...."></textarea>
                                <i class="fal fa-comment"></i>
                            </div>
                            <div class="form-btn col-12">
                                <button class="th-btn style4">
                                    Send Message<i class="fa-solid fa-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4">
                        <div class="title-area mb-40">
                            <span class="sub-title">Frequently Asked Any Question<img src="assets/img/theme-img/title_right.svg" alt=""></span>
                            <h2 class="sec-title text-white">Unveil Your True Beauty At Our Salon</h2>
                        </div>
                        <div class="accordion-area accordion" id="faqAccordion">
                            <div class="accordion-card active">
                                <div class="accordion-header" id="collapse-item-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        Do the salon have access to internet?
                                    </button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            During these consultations, our beauty professionals
                                            take the time to understand your preferences, concerns,
                                            and skincare or haircare goals. Based on this
                                            information, they create customized beauty solutions
                                            that cater to your specific requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        Where can i park my car?
                                    </button>
                                </div>
                                <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            During these consultations, our beauty professionals
                                            take the time to understand your preferences, concerns,
                                            and skincare or haircare goals. Based on this
                                            information, they create customized beauty solutions
                                            that cater to your specific requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        Are animals accepted?
                                    </button>
                                </div>
                                <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            During these consultations, our beauty professionals
                                            take the time to understand your preferences, concerns,
                                            and skincare or haircare goals. Based on this
                                            information, they create customized beauty solutions
                                            that cater to your specific requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        Do the salon accept advance payment?
                                    </button>
                                </div>
                                <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="collapse-item-4" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            During these consultations, our beauty professionals
                                            take the time to understand your preferences, concerns,
                                            and skincare or haircare goals. Based on this
                                            information, they create customized beauty solutions
                                            that cater to your specific requirements.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Loic\Desktop\Maatong Group\Client Projects\Caro Hair Braiding\carohairbraiding\resources\views/about.blade.php ENDPATH**/ ?>