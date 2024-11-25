@extends('layouts.main')
@section('title')
    Booking
@endsection

@section('content')
    <div class="breadcumb-wrapper background-image" style="background-image: url({{ asset('assets/img/hero/hero_bg_1_3.png') }});">
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
                            <img src="{{ asset('assets/img/services/'. $service . '.jpg') }}" alt="Product Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-about">
                        <p class="price">$20.00</p>
                        <h2 class="product-title">{{ucwords(str_replace('-', ' ', $service))}}</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                  <span style="width: 100%">Rated <strong class="rating">5.00</strong> out of 5 based
                    on <span class="rating">1</span> customer rating</span>
                            </div>
                            <a href="shop-details.html" class="woocommerce-review-link">(<span class="count">2</span> customer reviews)</a>
                        </div>
                        <p class="text">
                            Syndicate customized growth strategies prospective human capital
                            leverage other's optimal e-markets without transparent catalysts
                            for change. Credibly coordinate highly efficient methods of
                            empowerment cross unit solutions. It provides a rejuvenating
                            experience that promotes relaxation
                        </p>
                        <div class="actions pt-5">
                            <div class="form-group col-12">
                                <label class="mb-2" for="date-pick">Date</label>
                                <input type="text" class="date-pick form-control" name="date" id="date-pick"
                                       placeholder="Select Date" />
                            </div>
                            <div class="form-group col-12">
                                <label class="mb-2" for="time-pick">Time</label>
                                <input type="text" class="time-pick form-control" name="time" id="time-pick"
                                       placeholder="Select Time" />
                            </div>
                            <button class="th-btn">Checkout</button>
                        </div>
                        {{--<div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">123ABC</span></span>
                            <span class="posted_in">Category: <a href="shop.html" rel="tag">Nail Polish</a></span>
                            <span>Tags: <a href="shop.html">Nail Care</a><a href="shop.html">Nail Art</a></span>
                        </div>--}}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
