@extends('layouts.main')
@section('title')
    Shop
@endsection

@section('content')
<section class="th-hero-wrapper hero-9" id="hero">
    <div class="hero-slider-9 th-carousel number-dots" data-fade=
        "true" data-slide-show="1"
        data-md-slide-show="1" data-dots=
             "true" data-xl-dots="true" data-ml-dots="true"
        data-lg-dots=
             "true">
        <div class="th-hero-slide">
            <div class="th-hero-bg" data-bg-src=
                "assets/img/hero/hero_bg_1_1.png"></div>
            <div class="container">
                <div class="hero-style9">
                    <span class="sub-title" data-ani="slideinleft" data-ani-delay="0.2s"><img
                            src=
                                                 "assets/img/theme-img/title_left.svg"
                            alt=
                                                 "shape">Hair Care</span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Welcome to Caro Hair
                        <span class="text-title">Braiding</span>
                    </h1>
                    <div class="btn-group justify-content-center justify-content-lg-start" data-ani="slideinleft"
                        data-ani-delay="0.4s">
                        <a href="/services" class="th-btn white-btn">Get
                            Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg" data-bg-src=
                "assets/img/hero/hero_bg_1_2.png"></div>
            <div class="container">
                <div class="hero-style9">
                    <span class="sub-title" data-ani="slideinleft" data-ani-delay="0.2s"><img
                            src=
                                                 "assets/img/theme-img/title_left.svg"
                            alt=
                                                 "shape">Hair Care</span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Welcome to Caro Hair
                        <span class="text-title">Braiding</span>
                    </h1>
                    <div class="btn-group justify-content-center justify-content-lg-start" data-ani="slideinleft"
                        data-ani-delay="0.4s">
                        <a href="/services" class="th-btn white-btn">Get
                            Service</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-hero-slide">
            <div class="th-hero-bg" data-bg-src=
                "assets/img/hero/hero_bg_1_3.png"></div>
            <div class="container">
                <div class="hero-style9">
                    <span class="sub-title" data-ani="slideinleft" data-ani-delay="0.2s">
                        <img src="assets/img/theme-img/title_left.svg" alt="shape">Hair Care</span>
                    <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Welcome to Caro Hair
                        <span class="text-title">Braiding</span>
                    </h1>
                    <div class="btn-group justify-content-center justify-content-lg-start" data-ani="slideinleft"
                        data-ani-delay="0.4s">
                        <a href="/services" class="th-btn white-btn">Get Service</a>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <div style="z-index: 0;" class="shape-mockup hero_wrap d-none d-md-block dance" data-top="5%"
        data-left="-1%"><img src="assets/img/shape/flower_1_1.png" height="50" width="350"
            alt="shape"></div>

</section>
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
                                        <span class="odometer" data-count="26">00</span>
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
                                        <span class="odometer" data-count="42">00</span>
                                    </h3>
                                    <p class="counter-card_text text-white">Our Awesome Expert</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mt-45">
                        <a href="/about" class="th-btn">Learn More</a>
                        <!-- <div class="about-profile">
                        <div class="about-avater">
                            <img src="assets/img/shape/about-thumb_1.png" alt="about"/>
                        </div>
                        <div class="media-body">
                            <h5 class="title">Phillips Lewis</h5>
                            <span class="desig">CEO of Barber Shop</span>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overflow-hidden">
    <div class="service-area space" id="service-sec">
        <div class="container">
            <div class="row">
                <div class="title-area text-center mb-25">
                    <span class="sub-title style2">Our Services</span>
                    <img src="assets/img/theme-img/title_shape_3.svg" alt="" />
                    <h2 class="sec-title">Our Premium Hair Care Services</h2>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_overlay" data-bg-src="assets/img/shape/service_shape.png"></div>
                        <h3 class="service-grid_number">01</h3>
                        <div class="service-grid_icon">
                            <img src="assets/img/icon/service_3_1.svg" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="#">Haircut</a>
                            </h3>
                            <p class="service-grid_text">
                                A versatile and classic haircut that can be worn in
                                different lengths and styles, suitable for various face
                                shapes
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_overlay" data-bg-src="assets/img/shape/service_shape.png"></div>
                        <h3 class="service-grid_number">02</h3>
                        <div class="service-grid_icon">
                            <img src="assets/img/icon/service_3_2.svg" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="#">Hairdryer</a>
                            </h3>
                            <p class="service-grid_text">
                                Hairdryers are salons and households for various hair
                                styling purposes, such as drying wet hair after washing
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_overlay" data-bg-src="assets/img/shape/service_shape.png"></div>
                        <h3 class="service-grid_number">03</h3>
                        <div class="service-grid_icon">
                            <img src="assets/img/icon/service_3_3.svg" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="#">Hair Coloring</a>
                            </h3>
                            <p class="service-grid_text">
                                Hair coloring is the process of changing the natural color
                                of ones hair using different types color treatments.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_overlay" data-bg-src="assets/img/shape/service_shape.png"></div>
                        <h3 class="service-grid_number">04</h3>
                        <div class="service-grid_icon">
                            <img src="assets/img/icon/service_3_4.svg" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="#">Hair Style</a>
                            </h3>
                            <p class="service-grid_text">
                                If youre unsure about a specific style or how to achieve it,
                                a hairstylist can offer you achieve the desired look.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_overlay" data-bg-src="assets/img/shape/service_shape.png"></div>
                        <h3 class="service-grid_number">05</h3>
                        <div class="service-grid_icon">
                            <img src="assets/img/icon/service_3_5.svg" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="#">Smooth Shaving</a>
                            </h3>
                            <p class="service-grid_text">
                                Once you finish shaving, rinse your skin with cool water to
                                close the pores and then pat dry with a clean towel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_overlay" data-bg-src="assets/img/shape/service_shape.png"></div>
                        <h3 class="service-grid_number">06</h3>
                        <div class="service-grid_icon">
                            <img src="assets/img/icon/service_3_6.svg" alt="" />
                        </div>
                        <div class="service-grid-content">
                            <h3 class="box-title">
                                <a href="#">Hair Trimming</a>
                            </h3>
                            <p class="service-grid_text">
                                Hair trimming is the process of cutting the ends of your
                                hair to maintain its length, shape, and overall health.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-40">
                    <span>You Get More Services
                        <a class="line-btn" href="/services">Explore Now</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup shape-wrapp jump d-none d-xl-block" data-top="5%" data-left="0%">
        <img src="assets/img/shape/leaves_11.png" alt="shape" />
    </div>
    <div class="shape-mockup shape-wrapp jump d-none d-xl-block" data-bottom="5%" data-right="0%">
        <img src="assets/img/shape/leaves_7.png" alt="shape" />
    </div>
</div>

<section class="price-area overflow-hidden space">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 wow fadeInLeft">
                <div class="title-area mb-40 text-center text-xl-start">
                    <span class="sub-title">Hair Care Price<img src="assets/img/theme-img/title_right.svg"
                            alt="" /></span>
                    <h2 class="sec-title text-white">Our Offers For The Best Prices</h2>
                </div>
                <div class="nav nav-tabs pricing-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link price-list active" id="nav-step1-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-step1" type="button">
                        Women Price
                    </button>
                    <button class="nav-link price-list" id="nav-step2-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-step2" type="button">
                        Men Price
                    </button>
                    <button class="nav-link price-list" id="nav-step3-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-step3" type="button">
                        Kids Price
                    </button>
                </div>
                <div class="price-list-area">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="nav-step1" role="tabpanel">
                            <div class="price-box-wrapper style2">
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Hair Cutting & Trimming</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists approach every haircut
                                            </p>
                                        </div>
                                        <span class="price-box_price">$29</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Classic Hair Color</a>
                                            </h4>
                                            <p class="price-box_desc">Vibrant colors, finishes</p>
                                        </div>
                                        <span class="price-box_price">$45</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Keep Mustache in Good</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Nourish and protect your hair
                                            </p>
                                        </div>
                                        <span class="price-box_price">$44</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Blow Dry & Curl</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists take your hair type
                                            </p>
                                        </div>
                                        <span class="price-box_price">$66</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Shampoo & Set</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Products from reputable brands
                                            </p>
                                        </div>
                                        <span class="price-box_price">$76</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step2" role="tabpanel">
                            <div class="price-box-wrapper style2">
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Hair Cutting & Trimming</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists approach every haircut
                                            </p>
                                        </div>
                                        <span class="price-box_price">$36</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Classic Hair Color</a>
                                            </h4>
                                            <p class="price-box_desc">Vibrant colors, finishes</p>
                                        </div>
                                        <span class="price-box_price">$35</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Keep Mustache in Good</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Nourish and protect your hair
                                            </p>
                                        </div>
                                        <span class="price-box_price">$44</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Blow Dry & Curl</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists take your hair type
                                            </p>
                                        </div>
                                        <span class="price-box_price">$20</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Shampoo & Set</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Products from reputable brands
                                            </p>
                                        </div>
                                        <span class="price-box_price">$56</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-step3" role="tabpanel">
                            <div class="price-box-wrapper style2">
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Hair Cutting & Trimming</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists approach every haircut
                                            </p>
                                        </div>
                                        <span class="price-box_price">$26</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Classic Hair Color</a>
                                            </h4>
                                            <p class="price-box_desc">Vibrant colors, finishes</p>
                                        </div>
                                        <span class="price-box_price">$15</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Keep Mustache in Good</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Nourish and protect your hair
                                            </p>
                                        </div>
                                        <span class="price-box_price">$34</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Blow Dry & Curl</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Our stylists take your hair type
                                            </p>
                                        </div>
                                        <span class="price-box_price">$60</span>
                                    </div>
                                </div>
                                <div class="price-box">
                                    <div class="price-box_wrapp">
                                        <div class="price-box_content">
                                            <h4 class="box-title">
                                                <a href="price.html">Shampoo & Set</a>
                                            </h4>
                                            <p class="price-box_desc">
                                                Products from reputable brands
                                            </p>
                                        </div>
                                        <span class="price-box_price">$46</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight">
                <div class="pricing-form">
                    <div class="title-area mb-40 text-center">
                        <h3 class="sec-title mb-0 text-white">Booking Your Seat</h3>
                        <img src="assets/img/theme-img/title_shape_2.svg" alt="" />
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="First Name" class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Last Name" class="form-control" />
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="Email" class="form-control" />
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="phone" class="form-control" />
                        </div>
                        <div class="form-group col-12">
                            <select name="subject" id="subject" class="form-select nice-select">
                                <option value="" disabled="disabled" selected="selected" hidden="">
                                    Select Service
                                </option>
                                <option value="Box-Braids">Box-Braids</option>
                                <option value="Locs">Locs</option>
                                <option value="Twists">Twists</option>
                                <option value="Cornrows/ Braids">Cornrows/ Braids</option>
                                <option value="Kids Braids/Cornrows">Kids Braids/Cornrows</option>

                            </select>
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="date-pick form-control" name="date" id="date-pick"
                                placeholder="Select Date" />
                        </div>
                        <div class="form-group col-12">
                            <input type="text" class="time-pick form-control" name="time" id="time-pick"
                                placeholder="Select Time" />
                        </div>
                        <div class="btn-group justify-content-center justify-content-lg-start">
                            <button class="th-btn style4 fw-btn">Booking Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup jump" data-top="0%" data-right="0%">
        <img src="assets/img/shape/flower_1_11.png" alt="shape" />
    </div>
</section>
@endsection