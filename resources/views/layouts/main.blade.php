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
    </head>
<body class="bg-black2">
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
    <div class="sidemenu-wrapper shopping-cart d-none d-lg-block">
        <div class="sidemenu-content">
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget">

                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"></a>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <a href="#"><img src="assets/img/product/product_thumb_1_5.jpg"
                                            alt="Cart Image" /> Argan Hair oil</a>
                                    <span class="quantity">1 ×<span class="woocommerce-Price-amount amount">$81</span>
                                    </span>
                                </div>
                                <a href="#"><i class="fa fa-x"></i></a>
                            </div>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount"><span
                                class="woocommerce-Price-currencySymbol">$</span>43</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="/cart" class="th-btn wc-forward">View cart</a>
                        <a href="/checkout" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <form action="#">
            <input type="text" placeholder="What are you looking for?" />
        </form>
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
</body>

</html>
