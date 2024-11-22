@extends('layouts.main')
@section('title')
    About Us
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
    <div class="about-sec overflow-hidden space" id="about-sec">
        <div class="container align-item-center">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box4">
                        <div class="img4 wow fadeInUp">
                            <img class="tilt-active" src="assets/img/normal/about_3_1.jpg" alt="About" />
                        </div>
                        <div class="img5 wow fadeInRight">
                            <img height="274" width="350" style="object-fit: cover;" class="tilt-active"
                                 src="assets/img/normal/about_3_2.jpg" alt="About" />
                        </div>
                        <div class="about-shape">
                            <img src="assets/img/normal/about_3_3.jpg" alt="About" />
                        </div>
                        <div class="about-company-since-wrap">
                            <div class="about-icon">
                                <img src="assets/img/logo.png" height="70" width="70" alt="img" />
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
                                            <span class="odometer" data-count="15">00</span>
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
                                        <p class="counter-card_text text-white">Our Awesome Professional</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group mt-45">
                            <a href="/service" class="th-btn">Book A Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="space background-image" style="background-image: url(&quot;assets/img/bg/choose_bg_1.jpg&quot;);">
        <div class="container">
            <div class="choose-title-area">
                <div class="title-area mb-40 text-center">
                    <span class="sub-title style2">Why Choose Us</span>
                    <img src="assets/img/theme-img/title_shape_1.svg" alt="">
                    <h2 class="sec-title text-white">
                        Your Journey to Inner Harmony Starts Here Choose Our Salon &amp;
                        Wellness
                    </h2>
                </div>
            </div>
            <div class="choose-quote-wrapper">
                <div class="nav nav-tabs choose-quote-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-step1-tab" data-bs-toggle="tab" data-bs-target="#nav-step1" type="button">
                        OUR ACHIEVEMENTS
                    </button>
                    <button class="nav-link" id="nav-step2-tab" data-bs-toggle="tab" data-bs-target="#nav-step2" type="button">
                        OUR MISSION
                    </button>
                    <button class="nav-link" id="nav-step3-tab" data-bs-toggle="tab" data-bs-target="#nav-step3" type="button">
                        OUR VISION
                    </button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                        <div class="row gy-4 align-items-center">
                            <div class="col-xl-7">
                                <div class="pe-xl-5">
                                    <div class="video-box1 background-image" style="background-image: url(&quot;assets/img/normal/video_3.jpg&quot;);">
                                        <img src="assets/img/normal/video_3.jpg" alt="video">
                                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-play-btn play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="title-area mb-40">
                                    <h3 class="sec-title text-white">
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
                                </div>
                                <div>
                                    <a href="{{ route('gallery') }}" class="th-btn">Work Gallery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                        <div class="row gy-4 align-items-center">
                            <div class="col-xl-7">
                                <div class="pe-xl-5">
                                    <div class="video-box1 background-image" style="background-image: url(&quot;assets/img/normal/video_4.jpg&quot;);">
                                        <img src="assets/img/normal/video_4.jpg" alt="video">
                                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-play-btn play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="title-area mb-40">
                                    <h3 class="sec-title text-white">
                                        Harmony of Beauty and Wellness a Radiant Life
                                    </h3>
                                    <p>
                                        Beauty and wellness are closely linked because a person's
                                        physical appearance can significantly impact their mental
                                        and emotional well-being. When people feel good about
                                        their appearance, it can boost their self-esteem and
                                        confidence, leading to improved overall well-being.
                                        Additionally, maintaining a healthy lifestyle and
                                        practicing self-care can contribute to a radiant and
                                        youthful appearance.
                                    </p>
                                </div>
                                <div class="checklist style3">
                                    <ul>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Personal Grooming
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Physical Wellness
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Mental
                                            and Emotional
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Environmental Wellness
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Self-confidence
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-solid fa-circle-check"></i>Beauty
                                            and Wellness
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                        <div class="row gy-4 align-items-center">
                            <div class="col-xl-7">
                                <div class="pe-xl-5">
                                    <div class="video-box1 background-image" style="background-image: url(&quot;assets/img/normal/video_5.jpg&quot;);">
                                        <img src="assets/img/normal/video_5.jpg" alt="video">
                                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="video-play-btn play-btn popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="title-area mb-40">
                                    <h3 class="sec-title text-white">
                                        Cultivating Beauty and Wellness for a Balanced Life
                                    </h3>
                                    <p>
                                        Beauty is often associated with aesthetics and
                                        attractiveness. It encompasses various aspects, including
                                        skincare, makeup, hair care, grooming, and fashion. The
                                        beauty industry offers a wide range of products and
                                        services to help individuals enhance their appearance and
                                        boost their self-confidence.
                                    </p>
                                    <div class="checklist style3">
                                        <ul>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>Healthy and Glowing Skin
                                            </li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>Your
                                                Natural Beauty
                                            </li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>Physical Well-Being
                                            </li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>Inner
                                                and Outer Beauty
                                            </li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>
                                                Beauty and Wellnesse
                                            </li>
                                            <li>
                                                <i class="fa-sharp fa-solid fa-circle-check"></i>Face
                                                Masks
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
