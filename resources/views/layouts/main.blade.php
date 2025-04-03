<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Caro Hair Braiding - @yield('title')</title>
        <meta name="author" content="MaatongTech" />
        <meta name="description" content="Caro Hair Braiding - Hair Braiding Studio" />
        <meta name="keywords" content="Caro Hair Braiding - Hair Braiding Studio" />
        <meta name="robots" content="INDEX,FOLLOW" />
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no" />
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}" />
        <meta name="msapplication-TileColor" content="#ffffff" />
        <meta name="theme-color" content="#ffffff" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&amp;family=DM+Sans:wght@400;500;700&amp;display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.flipster.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/jquery.datetimepicker.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

        @stack('styles')
    </head>
<body class="bg-black2">

@include('sweetalert::alert')
    <div class="preloader">
        <div class="preloader-inner">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Caro Hair Braiding" height="250" width="250" /> <span class="loader"></span>
        </div>
    </div>
    <div class="th-menu-wrapper">
        <div class="th-menu-area">
            <div class="mobile-logo">
                <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-white.png') }}" height="120" width="120" alt="caro hair braiding"></a>
                <div class="close-menu">
                    <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/about">About us</a>
                    </li>
                    <li>
                        <a href="/services">Services</a>
                    </li>
                    {{--<li>
                        <a href="/shop">Shop</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>--}}
                    <li>
                        <a href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    <script src=" {{ asset('assets/js/vendor/jquery-3.7.1.min.js') }}"></script>
    <script src=" {{ asset('assets/js/slick.min.js') }}"></script>
    <script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src=" {{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src=" {{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src=" {{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src=" {{ asset('assets/js/jquery.flipster.min.js') }}"></script>
    <script src=" {{ asset('assets/js/odometer.js') }}"></script>
    <script src=" {{ asset('assets/js/appear-2.js') }}"></script>
    <script src=" {{ asset('assets/js/nice-select.min.js') }}"></script>
    <script src=" {{ asset('assets/js/jquery.datetimepicker.min.js') }}"></script>
    <script src=" {{ asset('assets/js/tilt.min.js') }}"></script>
    <script src=" {{ asset('assets/js/wow.min.js') }}"></script>
    <script src=" {{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
