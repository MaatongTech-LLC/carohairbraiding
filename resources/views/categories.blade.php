@extends('layouts.main')
@section('title')

    @section('content')
        <section class="space" data-bg-src=
            "assets/img/bg/price_bg_2.jpg">
            <div class="container">
                <div class="title-area text-center">
                    <span class="sub-title style2">Categories</span>
                    <img src="{{ asset('assets/img/theme-img/title_shape_1.svg') }}" alt="">
                    <h2 class="sec-title text-white">Choose From Our Categories</h2>
                </div>
                <div class="row gy-4 align-items-center">
                        @foreach($categories as $category)
                            <div class="col-lg-6">
                            <div class="price-card wow fadeInLeft">
                                <div class="price-card_img">
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($category->image) }}" class="" style="height: 100%!important;" alt="">
                                    <h4 class="price-card_price"><span class="currency">$</span> {{ $category->services->first()->min_price ?? '0.00' }} <span class="duration">Starting from</span></h4>
                                </div>
                                <div class="price-card_content">
                                    <h3 class="box-title">{{ $category->name }}</h3>
                                    <hr class="style1">
                                    <div class="available-list">
                                        <ul>
                                            @forelse($category->services as $service)
                                                <li><img src="{{ asset('assets/img/theme-img/title_left.svg') }}" alt="">{{ $service->name }}</li>

                                            @empty
                                                <li><img src="{{ asset('assets/img/theme-img/title_left.svg') }}" alt="">No Service Yet</li>
                                            @endforelse

                                        </ul>
                                        <div class="price-btn">
                                            <a href="{{ route('services', ['category_id' => $category->id]) }}" class="th-btn">Discover Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                <div class="mt-4 pt-5">
                    {{ $categories->links('vendor.pagination.default', ['elements' => $categories]) }}
                </div>
            </div>
            <div class="shape-mockup jump d-none d-lg-block" data-top="5%"
                 data-left="0%">
                <img src="{{ asset('assets/img/shape/leaves_6.png') }}" alt="shape">
            </div>
        </section>
    @endsection
