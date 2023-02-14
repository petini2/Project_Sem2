<!DOCTYPE html>
<html lang="en" style="background-color: #1e1f33;">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="tivo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Tivo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="/Admin/icon/Logo-NoBG.png" type="image/x-icon">
    <link rel="shortcut icon" href="/Admin/icon/Logo-NoBG.png" type="image/x-icon">
    <title>Humming Cinema</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link id="color" rel="stylesheet" href="/Admin/assets/css/color-1.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/Admin/css/main.css">
</head>

<body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper" style="background-color: #1e1f33;">
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper">
                <div>
                    <div class="logo-wrapper"><a href="/ad"><img class="img-fluid for-light"
                                src="/Admin/img/Logo.png" width="100%" alt=""></a>
                        {{-- <div class="back-btn"><i data-feather="grid"></i></div>
                  <div class="toggle-sidebar icon-box-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div> --}}
                    </div>
                    <div class="logo-icon-wrapper">
                        <a href="index.html">
                            <div class="icon-box-sidebar"><i data-feather="grid"></i></div>
                        </a>
                    </div>
                    <nav class="sidebar-main">
                        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                        <div id="sidebar-menu" style="margin-bottom: 30px">
                            <ul class="sidebar-links" id="simple-bar">
                                <li class="menu-box">
                                    <ul>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="/show">
                                                <i data-feather="monitor" style="color:#d12d52"></i>&nbsp;
                                                <span
                                                    style="color:#d12d52; font-size: 17px; font-weight: 900">Show</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="/showtime">
                                                <i data-feather="clock" style="color:#d12d52"> </i>&nbsp;
                                                <span style="color:#d12d52; font-size: 17px; font-weight: 900">Show
                                                    Time</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="/newsoffer">
                                                <i class="fa-solid fa-newspaper" style="color:#d12d52">
                                                </i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span style="color:#d12d52; font-size: 17px; font-weight: 900">News &
                                                    Offer</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="/movie">
                                                <i data-feather="film" style="color:#d12d52"> </i>&nbsp;
                                                <span
                                                    style="color:#d12d52; font-size: 17px; font-weight: 900">Movie</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="/cast">
                                                <i class="fa-solid fa-masks-theater"
                                                    style="color:#d12d52"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span
                                                    style="color:#d12d52; font-size: 17px; font-weight: 900">Cast</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="/castlist">
                                                <i class="fa-solid fa-tv"
                                                    style="color:#d12d52"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span style="color:#d12d52; font-size: 17px; font-weight: 900">Cast Role</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="/auser">
                                                <i data-feather="users" style="color:#d12d52"> </i>
                                                <span
                                                    style="color:#d12d52; font-size: 17px; font-weight: 900">User</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="">
                                                <i data-feather="calendar" style="color:#d12d52"> </i>
                                                <span
                                                    style="color:#d12d52; font-size: 17px; font-weight: 900">Booking</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-list">
                                            <a class="sidebar-link sidebar-title link-nav" href="">
                                                <i data-feather="credit-card" style="color:#d12d52"> </i>
                                                <span
                                                    style="color:#d12d52; font-size: 17px; font-weight: 900">Payment</span>
                                            </a>
                                        </li>
                                        <li class="onhover-dropdown " style="padding: 20px 22px;">
                                            <i class="fa-solid fa-user-tie"
                                                style="color:#d12d52;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span
                                                style="color:#d12d52; font-size: 17px; font-weight: 900">{{ Auth::user()->name }}</span>
                                            <ul class="onhover-show-div left-dropdown">
                                                <li style="padding:5px;">
                                                    <a class="sidebar-link sidebar-title link-nav" href="/ad/{{ Auth::user()->id}}/edit"
                                                        href="support-ticket.html">
                                                        <i class="fa-solid fa-address-card"
                                                            style="color:#d12d52;"></i>&nbsp;&nbsp;&nbsp;
                                                        <span
                                                            style="color:#d12d52; font-size: 17px; font-weight: 900">Edit Profile<span>
                                                    </a>
                                                </li> 
                                                <li style=" margin-left: -1.3rem; margin-top: -.5rem">
                                                    <form action="/logout" method="POST" style="margin-top: 0 !important;">
                                                        @csrf
                                                        <button type="sign__submit" class="dropdown-item">
                                                            <i data-feather="log-out" style="color:#d12d52;"></i>&nbsp;&nbsp;&nbsp;
                                                            <span
                                                                style="color:#d12d52; font-size: 17px; font-weight: 900">
                                                                Log out
                                                                <span>
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            </li>
                            </ul>
                        </div>
                        <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Sidebar Ends-->
        <!--Content Start-->
        <div class="content">
            @yield('content')
        </div>
        <!--Content End-->
        <!-- footer start-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="text-center">
                        <p class="mb-0">Copyright © 2023 Humming Cinema. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- latest jquery-->
    <script src="/Admin/assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="/Admin/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="/Admin/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="/Admin/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="/Admin/assets/js/scrollbar/simplebar.js"></script>
    <script src="/Admin/assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="/Admin/assets/js/config.js"></script>
    <script src="/Admin/assets/js/sidebar-menu.js"></script>
    <script src="/Admin/assets/js/chart/chartist/chartist.js"></script>
    <script src="/Admin/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="/Admin/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="/Admin/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="/Admin/assets/js/prism/prism.min.js"></script>
    <script src="/Admin/assets/js/clipboard/clipboard.min.js"></script>
    <script src="/Admin/assets/js/custom-card/custom-card.js"></script>
    <script src="/Admin/assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="/Admin/assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="/Admin/assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/Admin/assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="/Admin/assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="/Admin/assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="/Admin/assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="/Admin/assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="/Admin/assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="/Admin/assets/js/dashboard/default.js"></script>
    <script src="/Admin/assets/js/notify/index.js"></script>
    <script src="/Admin/assets/js/typeahead/handlebars.js"></script>
    <script src="https://kit.fontawesome.com/e6f41064ef.js" crossorigin="anonymous"></script>
    <script src="/Admin/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="/Admin/assets/js/typeahead/typeahead.custom.js"></script>
    <script src="/Admin/assets/js/typeahead-search/handlebars.js"></script>
    <script src="/Admin/assets/js/typeahead-search/typeahead-custom.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Template js-->
    <script src="/Admin/assets/js/script.js"></script>
    <!--<script src="/Admin/assets/js/theme-customizer/customizer.js"></script> -->
    <!-- login js-->
</body>

</html>
