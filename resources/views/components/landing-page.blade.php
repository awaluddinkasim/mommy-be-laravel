<!DOCTYPE html>
<html class="no-js" lang="en-US">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{ config('app.name') }}</title>

    <!-- Google web font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,700">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/fontawesome/css/all.min.css') }}">

    <!-- Linea icons -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/linea/arrows/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lp/library/linea/basic/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lp/library/linea/ecommerce/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lp/library/linea/software/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/lp/library/linea/weather/styles.css') }}" />

    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/animate/animate.css') }}">

    <!-- Lightcase -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/lightcase/css/lightcase.css') }}">

    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/swiper/swiper-bundle.min.css') }}">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/owlcarousel/owl.carousel.min.css') }}">

    <!-- Slick carousel -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/slick/slick.css') }}">

    <!-- Magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/magnificpopup/magnific-popup.css') }}">

    <!-- YTPlayer -->
    <link rel="stylesheet" href="{{ asset('assets/lp/library/ytplayer/css/jquery.mb.ytplayer.min.css') }}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/lp/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/lp/css/media.css') }}">

    <!-- Color schema -->
    <link rel="stylesheet" href="{{ asset('assets/lp/colors/red.css') }}" class="colors">

</head>

<body>

    <!-- Loader -->
    <div class="page-loader">
        <div class="progress"></div>
    </div>

    <!-- Header -->
    <header id="top-page" class="header">

        <!-- Main menu -->
        <div id="mainNav" class="main-menu-area animated">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-12 col-lg-2 d-flex justify-content-between align-items-center">

                        <!-- Logo -->
                        <div class="logo">

                            <a class="navbar-brand navbar-brand1" href="/">
                                <img src="{{ asset('assets/img/LOGO.png') }}" alt="{{ config('app.name') }}"
                                    data-rjs="2" />
                            </a>

                            <a class="navbar-brand navbar-brand2" href="/">
                                <img src="{{ asset('assets/img/LOGO.png') }}" alt="{{ config('app.name') }}"
                                    data-rjs="2" />
                            </a>

                        </div>

                        <!-- Burger menu -->
                        <div class="menu-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>

                    <div class="op-mobile-menu col-lg-10 p-0 d-lg-flex align-items-center justify-content-end">

                        <!-- Mobile menu -->
                        <div class="m-menu-header d-flex justify-content-between align-items-center d-lg-none">

                            <!-- Logo -->
                            <a href="#" class="logo">
                                <img src="images/logo.png" alt="Naxos" data-rjs="2" />
                            </a>

                            <!-- Close button -->
                            <span class="close-button"></span>

                        </div>

                        <!-- Items -->
                        <ul class="nav-menu d-lg-flex flex-wrap list-unstyled justify-content-center">

                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger @if (request()->routeIs('home')) active @endif"
                                    href="{{ route('home') }}">
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link js-scroll-trigger @if (request()->routeIs('privacy-policy')) active @endif"
                                    href="{{ route('privacy-policy') }}">
                                    <span>Kebijakan Privasi</span>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>
            </div>
        </div>

    </header>

    {{ $slot }}

    <!-- Footer -->
    <footer>

        <!-- Widgets -->
        <div class="footer-widgets">
            <div class="container">

                <div class="row">

                    <!-- Footer logo -->
                    <div class="col-12 col-md-6 col-lg-3 res-margin">
                        <div class="widget">
                            <p class="footer-logo">
                                <img src="{{ asset('assets/img/LOGO.png') }}" alt="Naxos" data-rjs="2"
                                    style="width: 64px">
                            </p>
                            <p>
                                Mommy Be hadir untuk membantu ibu hamil dan menyusui dalam memantau kesehatan dan
                                perkembangan selama kehamilan serta masa menyusui.
                            </p>
                        </div>
                    </div>

                    <!-- Useful links -->
                    <div class="col-12 col-md-6 col-lg-2 offset-lg-1 ms-auto">
                        <div class="widget">

                            <h6>Useful Links</h6>

                            <ul class="footer-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                            </ul>

                        </div>
                    </div>

                    <!-- Download -->
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="widget">

                            <h6>Download</h6>

                            <div class="button-store">
                                {{-- <a href="#"
                                    class="custom-btn d-inline-flex align-items-center m-2 m-sm-0 mb-sm-3"><i
                                        class="fab fa-google-play"></i>
                                    <p>Tersedia di <span>Google Play</span></p>
                                </a> --}}
                                <a href="{{ route('download') }}"
                                    class="custom-btn d-inline-flex align-items-center m-2 m-sm-0"><i
                                        class="fab fa-android"></i>
                                    <p>Download <span>APK</span></p>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- Copyright -->
        <div class="footer-copyright">
            <div class="container">

                <div class="row">
                    <div class="col-12">

                        <!-- Text -->
                        <p class="copyright text-center">
                            Copyright © 2024 <a href="#" target="_blank">{{ config('app.name') }}</a>. All
                            Rights Reserved.
                        </p>

                    </div>
                </div>

            </div>
        </div>

    </footer>

    <!-- Back to top -->
    <a href="#top-page" class="to-top">
        <div class="icon icon-arrows-up"></div>
    </a>

    <!-- jQuery -->
    <script src="{{ asset('assets/lp/library/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/lp/library/jquery/jquery-easing.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/lp/library/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/lp/library/retina/retina.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/backstretch/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/slick/slick.js') }}"></script>
    <script src="{{ asset('assets/lp/library/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/waitforimages/jquery.waitforimages.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/lightcase/js/lightcase.js') }}"></script>
    <script src="{{ asset('assets/lp/library/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/parallax/jquery.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/magnificpopup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/lp/library/ytplayer/jquery.mb.ytplayer.min.js') }}"></script>

    <!-- Main -->
    <script src="{{ asset('assets/lp/js/main.js') }}"></script>

</body>

</html>
