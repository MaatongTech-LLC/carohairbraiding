@extends('layouts.main')
@section('title')
    Gallery
@endsection

@section('content')
    <div class="breadcumb-wrapper background-image"
         style="background-image: url({{ asset('assets/img/hero/hero_bg_1_3.png') }});">
        <div class="container">
            <div class="breadcumb-content">
                <h2 class="breadcumb-title">Gallery</h2>
                <div class="breadcumb-menu-wrapper">
                    <ul class="breadcumb-menu">
                        <li><a href="/">Home</a></li>
                        <li>Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="overflow-hidden space" id="gallery-sec">
        <div class="container">
            <div class="filter-menu style2 indicator-active filter-menu-active">
                <button data-filter="*" class="tab-btn active" type="button">
                    ALL
                </button>

                <span class="indicator" style="--height-set: 46px; --width-set: 56.9219px; --pos-y: 483.484375px; --pos-x: 19.5625px;"></span></div>
            <div class="row gallery-row filter-active" style="position: relative; height: 3878.53px;">
                <div class="col-md-6 col-xl-auto filter-item cat1 cat2 cat5 cat4 cat3" style="position: absolute; left: 0px; top: 0px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_1.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_1.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat5 cat9 cat8 cat10" style="position: absolute; left: 0px; top: 539.291px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_2.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_2.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat7 cat6" style="position: absolute; left: 0px; top: 1182.49px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_3.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_3.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat9 cat7 cat4" style="position: absolute; left: 0px; top: 1825.68px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_4.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_4.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat1 cat3 cat4 cat5" style="position: absolute; left: 0px; top: 2468.88px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_5.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_5.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat6 cat8 cat10" style="position: absolute; left: 0px; top: 2968.39px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_6.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_6.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat2 cat10" style="position: absolute; left: 0px; top: 3763.79px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_7.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_7.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto filter-item cat10 cat5" style="position: absolute; left: 0px; top: 3821.16px;">
                    <div class="gallery-card wow fadeInUp" style="visibility: hidden; animation-name: none;">
                        <div class="gallery-img">
                            <img src="assets/img/gallery/gallery_1_8.jpg" alt="gallery image">
                        </div>
                        <div class="gallery-content">
                            <a href="assets/img/gallery/gallery_1_8.jpg" class="icon-btn popup-image"><i class="fa-solid fa-arrow-up-right"></i></a>
                            <h2 class="gallery-title box-title">Braid</h2>
                            <p class="gallery-text">Braid</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="th-pagination text-center mt-60 mb-0">
                {{--<ul>
                    <li>
                        <a href="#"><i class="fa-solid fa-arrow-left"></i></a>
                    </li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li>
                        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                    </li>
                </ul>--}}
            </div>
        </div>
    </div>
@endsection
