@extends('layouts.main')
@section('title')
    Contact Us
@endsection

@section('content')
    <div class="breadcumb-wrapper background-image"
         style="background-image: url({{ asset('assets/img/hero/hero_bg_1_3.png') }});">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Services</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="space" id="contact-sec">
        <div class="container">
            <div class="row gy-40">
                <div class="col-lg-6 col-xl-5">
                    <div class="contact-info-wrap me-xl-4">
                        <div class="title-area mb-20">
                            <h3 class="sec-title">Our Contact Information</h3>
                            <p>
                                Have a inquiry or some feedback for us? Fill out the form
                                below to contact our team.
                            </p>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Our Address</h3>
                                <span class="contact-info_text">10249 Homestead Dr, Brownsburg, IN 46112, USA</span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Phone Number</h3>
                                <span class="contact-info_text">Mobile:
                    <a href="tel:+16165161419">+1 616-516-1419 </a></span><span class="contact-info_text">Email:
                    <a href="mailto:info@carohairbraiding.com">info@carohairbraiding.com</a></span>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info_icon">
                                <i class="fa-light fa-clock"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Hours of Operation</h3>
                                <span class="contact-info_text">Tuesday - saturday: 9AM - 6PM</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-7">
                    <div class="map-sec">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3062.623692228146!2d-86.3472298!3d39.860265399999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886cadaafa6458c3%3A0x333a55d73b839859!2sCaro%20Hair%20Braiding!5e0!3m2!1sfr!2scm!4v1732286652362!5m2!1sfr!2scm"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-wrapper">
                        <form action="mail.php" method="POST" class="contact-form ajax-contact">
                            <h2 class="form-title text-center">Get In Touch</h2>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <i class="fa-sharp fa-light fa-user"></i>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Your Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <i class="fa-sharp fa-regular fa-envelope"></i>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Email Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="tel" class="form-control" name="number" id="number"
                                           placeholder="Phone Number">
                                    <i class="fal fa-phone"></i>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                           placeholder="Subject">
                                    <i class="fal fa-question"></i>
                                </div>
                                <div class="form-group col-12">
                                    <i class="fal fa-comment"></i>
                                    <textarea name="message" id="message" cols="30" rows="3" class="form-control"
                                              placeholder="Message"></textarea>
                                </div>
                                <div class="form-btn col-12">
                                    <button class="th-btn fw-btn">
                                        Send Message<i class="fa-solid fa-arrow-right ms-2"></i>
                                    </button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
