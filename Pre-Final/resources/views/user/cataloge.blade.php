<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="fontend/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="fontend/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="fontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="fontend/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="fontend/css/nouislider.min.css">
    <link rel="stylesheet" href="fontend/css/ionicons.min.css">
    <link rel="stylesheet" href="fontend/css/plyr.css">
    <link rel="stylesheet" href="fontend/css/photoswipe.css">
    <link rel="stylesheet" href="fontend/css/default-skin.css">
    <link rel="stylesheet" href="fontend/css/main.css">

    <!-- Favicons -->
    <link rel="icon" type="fontend/image/png" href="fontend/icon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="fontend/icon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="72x72" href="fontend/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="fontend/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="fontend/icon/apple-touch-icon-144x144.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>

<body class="body">

    <!-- header -->
    <header class="header">
        <div class="header__wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__content">
                            <!-- header logo -->
                            <a href="{{ url('userindex') }}" class="header__logo">
                                <img src="fontend/img/HUMMINGLOGO.png" alt="">
                            </a>
                            <!-- end header logo -->

                            <!-- header nav -->
                            <ul class="header__nav">
                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="{{ url('userindex') }}">Home</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->

                                <li class="header__nav-item">
                                    <a href="{{ url('cataloge') }}" class="dropdown-toggle header__nav-link"
                                        id="dropdownMenuHome">Movies</a>
                                </li>
                                <!-- end dropdown -->
                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="{{ url('showbooking') }}">Show</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="{{ url('newsandoffers') }}">News &
                                        Offers</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="dropdown header__nav-item">
                                    <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#"
                                        role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                        <li><a href="{{ url('About') }}">About</a></li>
                                    </ul>
                                </li>
                                <!-- end dropdown -->
                            </ul>
                            <!-- end header nav -->

                            <!-- header auth -->
                            <div class="header__auth">
                                <button class="header__search-btn" type="button">
                                    <i class="icon ion-ios-search"></i>
                                </button>

                                <li class="dropdown header__nav-item">
                                    <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#"
                                        role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="icon ion-ios-body"></i></a>
                                    <ul class="dropdown-menu header__dropdown-menu"
                                        aria-labelledby="dropdownMenuMore">
                                        <li>
                                            <form action="/logout" method="POST">
                                                @csrf
                                        <li id="nameli">
                                            {{ Auth::user()->name }}
                                        </li>
                                        <button id="btndropdown">logout</button>
                                        </form>
                                </li>
                                <li><a href="{{ url('edit') }}" class="ionios">Edit profile</a></li>
                                </ul>
                                </li>
                            </div>
                            <!-- end header auth -->

                            <!-- header menu btn -->
                            <button class="header__btn" type="button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- end header menu btn -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- header search -->
        <form action="{{ url('search') }}" role="search" method="get" type="get" class="header__search">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__search-content">
                            <input type="search" name="query"
                                placeholder="Search for a movie that you are looking for">

                            <button type="button">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end header search -->
    </header>
    <!-- end header -->

    <!-- page title -->
    <section class="section section--first section--bg" data-bg="fontend/img/section/section.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__wrap">
                        <!-- section title -->
                        <h2 class="section__title">Movies</h2>
                        <!-- end section title -->

                        <!-- breadcrumb -->
                        <ul class="breadcrumb">
                            <li class="breadcrumb__item"><a href="{{ url('userindex') }}">Home</a></li>
                            <li class="breadcrumb__item breadcrumb__item--active">Movies</li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <!-- filter -->
    <div class="filter">
    </div>
    <!-- end filter -->

    <!-- catalog -->

    <div class="catalog">
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <!-- card -->
                    <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <div class="card__cover">
                                <img src="{{asset('Admin/img/movie/'.$movie->ImgURL)}}" alt="">
                                <a href="{{ url('detail', $movie->id) }}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a
                                        href="{{ url('detail', $movie->id) }}">{{ $movie->MovieName }}</a>
                                </h3>
                                <span class="card__category">
                                    <a href="#">{{ $movie->Genre }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                @endforeach




            </div>
        </div>

        </section>
        <!-- end expected premiere -->

        <!-- footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- footer list -->
                    <div class="col-12 col-md-3">
                        <h6 class="footer__title">Download Our App</h6>
                        <ul class="footer__app">
                            <li><a href="#"><img src="fontend/img/Download_on_the_App_Store_Badge.svg"
                                        alt=""></a></li>
                            <li><a href="#"><img src="fontend/img/google-play-badge.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end footer list -->

                    <!-- footer list -->
                    <div class="col-6 col-sm-4 col-md-3">
                        <h6 class="footer__title">Resources</h6>
                        <ul class="footer__list">
                            <li><a href="#">About Us</a></li>
                        </ul>
                    </div>
                    <!-- end footer list -->

                    <!-- footer list -->
                    <div class="col-6 col-sm-4 col-md-3">
                        <h6 class="footer__title">Legal</h6>
                        <ul class="footer__list">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Security</a></li>
                        </ul>
                    </div>
                    <!-- end footer list -->

                    <!-- footer list -->
                    <div class="col-12 col-sm-4 col-md-3">
                        <h6 class="footer__title">Contact</h6>
                        <ul class="footer__list">
                            <li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
                            <li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
                        </ul>
                        <ul class="footer__social">
                            <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                            <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                            <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                            <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                        </ul>
                    </div>
                    <!-- end footer list -->

                    <!-- footer copyright -->
                    <div class="col-12">
                        <div class="footer__copyright">
                            <small><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></small>

                            <ul>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end footer copyright -->
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!-- JS -->
        <script src="fontend/js/jquery-3.3.1.min.js"></script>
        <script src="fontend/js/bootstrap.bundle.min.js"></script>
        <script src="fontend/js/owl.carousel.min.js"></script>
        <script src="fontend/js/jquery.mousewheel.min.js"></script>
        <script src="fontend/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="fontend/js/wNumb.js"></script>
        <script src="fontend/js/nouislider.min.js"></script>
        <script src="fontend/js/plyr.min.js"></script>
        <script src="fontend/js/jquery.morelines.min.js"></script>
        <script src="fontend/js/photoswipe.min.js"></script>
        <script src="fontend/js/photoswipe-ui-default.min.js"></script>
        <script src="fontend/js/main.js"></script>
</body>

</html>
