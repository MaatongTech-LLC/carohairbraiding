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
                <div class="title-area mb-40 text-center text-xl-start">
                    <span class="sub-title">Our Services<img src="assets/img/theme-img/title_right.svg"
                                                                alt="" /></span>
                    <h2 class="sec-title text-white">Discover the amazing haircuts you can get with us</h2>
                </div>
                @php
                    $directory = public_path('assets/img/services');
                    $images = array_map(function($file) {
                        return [
                            'path' => 'assets/img/services/'. basename($file),
                            'name' => pathinfo($file, PATHINFO_FILENAME)
                            ];
                    }, glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE));
                @endphp

                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4 col-xl-4 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div>
                            <div class="service-box">
                                <div class="service-box_icon">
                                    <div class="global-icon">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="Icon">
                                    </div>
                                </div>
                                <h5 class="box-title mb-2">
                                    <span>{{ ucwords($service->name) }}</span>
                                </h5>
                                <p class="service-box_text">
                                    {{ $service->description }}
                                </p>

                            </div>
                            <div class="service-img">
                                <img class="h-100" style="min-height: 280px; max-height: 300px; object-fit: cover;" src="{{ Storage::url($service->image) }}" alt="Service">
                                <a  href="{{ route('booking', $service->id ) }}" class="th-btn d-block">Book now</a>
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

{{--    Modal --}}{{--
    <div class="modal fade" tabindex="-1" id="bookingModal" style="z-index: 9999999;">
        <div class="modal-dialog modal-dialog-centered modal-xl border-0">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h2 class="modal-title">Book A Service</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></button>
                </div>
                <div class="modal-body border-0">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>--}}
@endsection
