<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'CarRentalServices') }}</title>


    <!-- Preloader CSS-->
    <style>
        #preloader:after, #preloader:before {
            content: "";
            display: block;
            left: -1px;
            top: -1px
        }

        #preloader-overlayer, #preloader:after, #preloader:before {
            position: absolute;
            height: 100%;
            width: 100%
        }

        #preloader-overlayer {
            position: fixed;
            top: 0;
            left: 0;
            background-color: #112E3B;
            z-index: 999
        }

        #preloader {
            height: 40px;
            width: 40px;
            position: fixed;
            top: 50%;
            left: 50%;
            margin-top: -20px;
            margin-left: -20px;
            z-index: 9999
        }

        #preloader:before {
            -webkit-animation: rotation 1s linear infinite;
            animation: rotation 1s linear infinite;
            border: 2px solid #42DB0C;
            border-top: 2px solid transparent;
            border-radius: 100%
        }

        #preloader:after {
            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 100%
        }

        @media only screen and (min-width: 768px) {
            #preloader {
                height: 60px;
                width: 60px;
                margin-top: -30px;
                margin-left: -30px
            }

            #preloader:before {
                left: -2px;
                top: -2px;
                border-width: 2px
            }
        }

        @media only screen and (min-width: 1200px) {
            #preloader {
                height: 80px;
                width: 80px;
                margin-top: -40px;
                margin-left: -40px
            }
        }

        @-webkit-keyframes rotation {
            from {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            to {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }

        @keyframes rotation {
            from {
                -webkit-transform: rotate(0);
                transform: rotate(0)
            }
            to {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg)
            }
        }
    </style>

    <link rel="stylesheet" href="{{ asset('modules/home/libs/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/home/libs/fontawesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/home/libs/linearicons/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/home/css/rentnow-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/home/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/home/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/home/css/style.css') }}">

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCOdKtT5fapH3_OfhV3HFeZjqFs4OfNIew"></script>



</head>
<body class="rn-preloader">
<div id="preloader"></div>
<div id="preloader-overlayer"></div>

<body>
<header class="rn-header">

    <!-- Topbar-->
    <div class="rn-topbar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-5 col-lg-3">

                    <!-- Tobar Social-->
                    <ul class="rn-social">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="col-12 col-sm-7 col-lg-9">

                    <!-- Topbar Contact with Icon-->
                    <div class="rn-icon-contents">
                        <div class="rn-phone rn-icon-content">
                            <div class="rn-icon">
                                <i class="lnr lnr-phone"></i>
                            </div>
                            <div class="rn-info">
                                <ul>
                                    <li>0804-944-1250</li>
                                    <li>0804-944-1251</li>
                                </ul>
                            </div>
                        </div>
                        <div class="rn-email rn-icon-content">
                            <div class="rn-icon">
                                <i class="lnr lnr-envelope"></i>
                            </div>
                            <div class="rn-info">
                                <ul>
                                    <li>support@rentnow.com</li>
                                    <li>sale@rentnow.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="rn-address rn-icon-content">
                            <div class="rn-icon">
                                <i class="lnr lnr-map-marker"></i>
                            </div>
                            <div class="rn-info">
                                <ul>
                                    <li>1425 Admiralty Lane, Lekki Phase 1</li>
                                    <li>Lagos, Nigeria</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar-->


    <!-- Menubar-->
    <div class="rn-menubar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <!-- Logo-->
                    <a class="brand-name" href="{{ url('/home') }}">
                        <img class="img-fluid" src="modules/home/images/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="col-8">
                    <nav class="rn-navbar-container">

                        <!-- Navbar Toggle Button for Only Tablet and Phone-->
                        <button class="rn-navbar-toggler" id="rn-navbar-toggler">
                            <span class="rn-navbar-toggler-bar"></span>
                            <span class="rn-navbar-toggler-bar"></span>
                            <span class="rn-navbar-toggler-bar"></span>
                        </button>

                        <!-- Main Nav Menu-->
                        <ul class="rn-navbar">
                            <li>
                                <a href="{{ url('/home') }}">Home</a>
                            </li>

                            <li>
                                <a href="{{ url('/about-us') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ url('/service') }}">Service</a>
                            </li>
                            <!-- <li>
                                <a href="#">Blog
                                    <i class="lnr lnr-chevron-down"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="blog.html">Blog List</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid.html">Blog Grid</a>
                                    </li>
                                    <li>
                                        <a href="blog-grid-sidebar.html">Blog Grid - Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="blog-single.html">Single Post</a>
                                    </li>
                                </ul>
                            </li> -->
                            <li>
                                <a href="{{ url('/contact') }}">Contact</a>
                            </li>
                            <li>
                                <a href="{{ url('/cars') }}">Cars</a>
                            </li>
                            <li>
                                <a class="btn btn-main" href="{{ route('login') }}">Login</a>
                            </li>
                            <li>
                                <a class="btn btn-main" href="{{ route('register') }}">Sign Up</a>
                            </li>
                        </ul>

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menubar-->

</header>
<!-- End Header-->

<div>
    @yield('content')
</div>


<!-- Site Footer-->
<footer class="rn-footer">

    <!-- Footer Widgets-->
    <div class="rn-footer-widgets">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <!-- Widget Item-->
                    <section class="rn-widget">
                        <h2 class="rn-widget-title">About Us</h2>
                        <div class="rn-widget-content">
                            <a class="brand-name" href="index.html">
                                <img src="modules/home/images/logo.svg" alt="Logo">
                            </a>
                            <p>Sed sit amet ligula ac nulla finibus euismod nec nec diam. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Praesent semper, risus eget ornare maximus, ipsum ante
                                semper.</p>
                            <ul class="rn-widget-social">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!-- End Widget Item-->

                </div>
                <div class="col-md-5">

                    <!-- Widget Item-->
                    <section class="rn-widget">
                        <h2 class="rn-widget-title">Quick Links</h2>
                        <div class="rn-widget-content">
                            <div class="row rn-quick-links">
                                <div class="col-6">
                                    <ul>
                                        <li>
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Support</a>
                                        </li>
                                        <li>
                                            <a href="#">View Booking</a>
                                        </li>
                                        <li>
                                            <a href="#">Affiliate Programme</a>
                                        </li>
                                        <li>
                                            <a href="#">Marketplace</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul>
                                        <li>
                                            <a href="#">Site Map</a>
                                        </li>
                                        <li>
                                            <a href="#">Careers</a>
                                        </li>
                                        <li>
                                            <a href="#">Press</a>
                                        </li>
                                        <li>
                                            <a href="#">Get a Receipt</a>
                                        </li>
                                        <li>
                                            <a href="#">Community</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Widget Item-->

                </div>
                <div class="col-md-3">

                    <!-- Widget Item-->
                    <section class="rn-widget">
                        <h2 class="rn-widget-title">Contact Us</h2>
                        <div class="rn-widget-content">
                            <!-- Topbar Contact with Icon-->
                            <div class="rn-icon-contents">
                                <div class="rn-phone rn-icon-content">
                                    <div class="rn-icon">
                                        <i class="lnr lnr-phone"></i>
                                    </div>
                                    <div class="rn-info">
                                        <ul>
                                            <li>0804-944-1250</li>
                                            <li>0804-944-1251</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rn-email rn-icon-content">
                                    <div class="rn-icon">
                                        <i class="lnr lnr-envelope"></i>
                                    </div>
                                    <div class="rn-info">
                                        <ul>
                                            <li>support@rentnow.com</li>
                                            <li>sale@rentnow.com</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rn-address rn-icon-content">
                                    <div class="rn-icon">
                                        <i class="lnr lnr-map-marker"></i>
                                    </div>
                                    <div class="rn-info">
                                        <ul>
                                            <li>1425 Admiralty Lane, Lekki Phase 1</li>
                                            <li>Lagos, Nigeria</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- End Widget Item-->

                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Widgets-->

    <!-- Footer Copyright-->
    <div class="rn-footer-copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p>Copyright &copy; RentNow 2019. All rights reserved.</p>
                </div>
                <!-- <div class="col-md-6 text-right">
                    <span class="rn-pyament-methods">
                        <span>We Accept</span>
                        <img src="assets/images/payments.png" alt="payments" srcset="assets/images/payments.png 1x, assets/images/payments@2x.png 2x">
                    </span>
                </div> -->
            </div>
        </div>
    </div>
    <!-- End Footer Copyright-->

</footer>

<!-- Scripts -->
<script src="{{  asset('modules/home/js/jquery.min.js') }}"></script>
<script src="{{  asset('modules/home/js/popper.min.js') }}"></script>
<script src="{{  asset('modules/home/libs/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{  asset('modules/home/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{  asset('modules/home/js/starrr.min.js') }}"></script>
<script src="{{  asset('modules/home/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{  asset('modules/home/js/scripts.js') }}"></script>

</body>
</html>
