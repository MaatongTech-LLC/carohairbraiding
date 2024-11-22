<header class="th-header header-layout9">
    <div class="header-top">
        <div class="container th-container">
            <div
                class="row justify-content-center justify-content-lg-end justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li>
                                <i class="fa fa-location-dot"></i>10249 Homestead Dr, Brownsburg, IN 46112, USA
                            </li>
                            <li>
                                <a href="tel:+16165161419 "><i class="fa fa-phone"></i> +1 616-516-1419</a>
                            </li>
                            <li>
                                <a href="mailto:info@carohairbraiding.com"><i class="fa fa-envelope"></i>
                                    info@carohairbraiding.com</a>
                            </li>
                            <li><i class="fa fa-calendar-clock"></i> Tue - Sat: 9 AM - 6 PM</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="social-links">
                        <span class="social-title">Follow Us:</span> <a
                            href="https://www.facebook.com/profile.php?id=100095229443031&mibextid=LQQJ4d"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/carohairbraiding"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@caro.hair.braidin"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area bg-white">
            <div class="container th-container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="/"><img height="81" width="100" src="assets/img/logo.png"
                                             alt="caro hair braiding"></a>
                        </div>
                    </div>
                    <div class="col-auto me-xl-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="item-active">
                                    <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="/">Home</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="/about">About us</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('services') ? 'active' : '' }}" href="/services">Services</a>
                                </li>
                               {{-- <li>
                                    <a class="{{ request()->routeIs('shop') ? 'active' : '' }}" href="/shop">Shop</a>
                                </li>--}}
                                <li>
                                    <a class="{{ request()->routeIs('blog') ? 'active' : '' }}" href="/blog">Blog</a>
                                </li>
                                <li>
                                    <a class="{{ request()->routeIs('contact') ? 'active' : ''}}" href="/contact">Contact Us</a>
                                </li>
                            </ul>
                        </nav>
                        <button class="th-menu-toggle d-inline-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="#" class="icon-btn sideMenuToggler2"><i
                                    class="fa fa-cart-shopping"></i><span class="badge">5</span></a>
                            <a href="/booking" class="th-btn"><i class="fa fa-calendar-alt"></i> Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
