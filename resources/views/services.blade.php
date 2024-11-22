@extends('layouts.main')
@section('title')
    Services
@endsection

@section('content')
    <div class="breadcumb-wrapper background-image" style="background-image: url({{ asset('assets/img/hero/hero_bg_1_3.png') }});">
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
                @php
                    $directory = public_path('assets/img/services');
                    $images = array_map(function($file) {
                        return [
                            'path' => 'assets/img/services/'. basename($file),
                            'name' => pathinfo($file, PATHINFO_FILENAME)
                            ];
                    }, glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE));
                @endphp

                @foreach($images as $image)
                    <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div>
                            <div class="service-box">
                                <div class="service-box_icon">
                                    <div class="global-icon">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="Icon">
                                    </div>
                                </div>
                                <h5 class="box-title mb-2">
                                    <span>{{ucwords(str_replace('-', ' ', $image['name']))}}</span>
                                </h5>
                                <p class="service-box_text">
                                    Braids are tightly woven close to the scalp in straight or curved patterns, often for protective styling.
                                </p>

                            </div>
                            <div class="service-img">
                                <img class="h-100" style="min-height: 280px; max-height: 300px; object-fit: cover;" src="{{ asset($image['path']) }}" alt="Service">
                                <a  href="{{ route('booking') }}" class="th-btn d-block">Book now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="shape-mockup jump d-none d-xl-block" style="bottom: 15%; left: 0%;">
            <img src="assets/img/shape/leaves_1.png" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" style="top: 5%; right: 0%;">
            <img src="assets/img/shape/leaves_7.png" alt="shape">
        </div>
    </section>
@endsection
