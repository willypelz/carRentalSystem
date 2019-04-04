<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Dashboard Car Rental Management System') }}</title>


    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('modules/dashboard/images/favicon.png') }}">
    <link href="{{ asset('modules/dashboard/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('modules/dashboard/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader"><div class="spinner"><div class="spinner-a"></div><div class="spinner-b"></div></div></div>
<!--*******************
    Preloader end
********************-->



<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="#" class="brand-logo">
            <span class="logo-abbr">Q</span>
            <span class="logo-compact">RentNow</span>
            <span class="brand-title">RentNow</span>
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="toggle-icon"><i class="icon-menu"></i></span>
            </div>
        </div>
    </div>


    <!--**********************************
       Nav header end
   ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">

                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown notification_dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell"></i>
                                <span class="badge badge-primary">0</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <h5 class="notification_title">Notifications</h5>
                                <ul class="list-unstyled">
                                    <li class="media dropdown-item">
                                        <p>No new Messages</p>
                                    </li>
                                </ul>
                                <a class="all-notification" href="#">All Notifications</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                <i class="mdi mdi-account"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">

                                <a  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="dropdown-item">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->




    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="quixnav">
        <div class="quixnav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Navigation</li>
                <li><a href="{{ url('home') }}"><i class="mdi mdi-home"></i><span class="nav-text">Home</span></a></li>

                <li><a class="has-arrow" href="{{ url('add-car')  }}" aria-expanded="false"><i class="mdi mdi-car"></i><span class="nav-text">Register Vehicle</span></a></li>
                <li><a class="has-arrow" href="{{ url('uploadVehicle')  }}" aria-expanded="false"><i class="mdi mdi-upload"></i><span class="nav-text">Upload Vehicle</span></a></li>
                <li><a class="has-arrow" href="{{ url('view-cars')  }}" aria-expanded="false"><i class="mdi mdi-car"></i><span class="nav-text">Manage Vehicle</span></a></li>
                <li><a class="has-arrow" href="{{ url('view-users') }}" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i><span class="nav-text">Manage Customer</span></a>

                </li>
                <li><a class="has-arrow" href="{{ url('view-payments') }}" aria-expanded="false"><i class="mdi mdi-cash"></i><span class="nav-text">Payment Management</span></a>

                </li>


            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->


    <!--**********************************
        Content body start
    ***********************************-->
    <div >
        <!-- row -->
        @yield('content')
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!--**********************************
    Footer start
***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="https://themeforest.net/user/quixlab" target="_blank">Quixlab</a> 2019</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->

<!--removeIf(production)-->

<!--endRemoveIf(production)-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<script src="{{ asset('modules/dashboard/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('modules/dashboard/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <!-- Here is navigation script -->
    <script src="{{ asset('modules/dashboard/vendor/quixnav/quixnav.min.js') }}"></script>
    <script src="{{ asset('modules/dashboard/js/quixnav-init.js') }}"></script>
    <script src="{{ asset('modules/dashboard/js/custom.min.js') }}"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="{{ asset('modules/dashboard/js/styleSwitcher.js') }}"></script>
    <!--endRemoveIf(production)-->


    <!-- Daterange picker library -->
    <script src="{{ asset('modules/dashboard/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('modules/dashboard/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('modules/dashboard/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('modules/dashboard/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>


    <!-- daterangepicker init -->
    <script src="{{ asset('modules/dashboard/js/plugins-init/card-headerdatepicker-init.js') }}"></script>


    <script src="{{ asset('modules/dashboard/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('modules/dashboard/js/dashboard/dashboard-1.js') }}"></script>
<!-- Datatable -->
<script src=""></script>
<script src=""></script>
<script src="{{ asset('modules/dashboard/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('modules/dashboard/js/plugins-init/datatables.init.js') }}"></script>

</body>
</html>
