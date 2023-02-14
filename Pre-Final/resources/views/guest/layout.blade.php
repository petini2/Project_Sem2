<!DOCTYPE html>
<html lang="en">
hello
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
    <link rel="icon" type="image/png" href="fontend/icon/BEAN.png" sizes="32x32">
    <link rel="apple-touch-icon" href="fontend/icon/favicon-32x32.png">
    <link rel="apple-touch-icon" sizes="72x72" href="fontend/icon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="fontend/icon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="144x144" href="fontend/icon/apple-touch-icon-144x144.png">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Dmitry Volkov">
    <title>BEAN CINEMA</title>

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
                            <a href="#" class="header__logo">
                                <img src="fontend/img/HUMMINGLOGO.png" alt="">
                            </a>
                            <!-- end header logo -->

                            <!-- header nav -->
                            <ul class="header__nav">
                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="#">Home</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                {{-- <li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="{{url('cataloge')}}"></a></li>
										<li><a href="{{url('details1')}}">Movie</a></li>
									</ul>
								</li> --}}

                                <li class="header__nav-item">
                                    <a href="#" class="dropdown-toggle header__nav-link"
                                        id="dropdownMenuHome">Movies</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="#">Show</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="#">News &
                                        Offers</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="dropdown header__nav-item">
                                    <a class="dropdown-toggle header__nav-link header__nav-link--more" href="#"
                                        role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="icon ion-ios-more"></i></a>

                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                        <li><a href="#">About</a></li>


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

                                <a href={{ asset('login') }} class="header__sign-in">
                                    <i class="icon ion-ios-log-in"></i>
                                    <span>sign in</span>
                                </a>
                            </div>
                            <!-- end header auth -->
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
        <form action="#" class="header__search">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header__search-content">
                            <input type="text"
                                placeholder="Search for a movie, TV Series that you are looking for">

                            <button type="button">search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end header search -->
    </header>
    <!-- end header -->

    <!-- home -->
    <section class="home">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">


            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                @foreach ($offers as $offer)
                    <div class="carousel-item  @if ($loop->first) active @endif">
                        <img src="{{asset('Admin/img/newsoffer/'.$offer->ImgURL)}}" alt="" class="d-block">
                    </div>
                @endforeach
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- end home -->

        <!-- content -->

        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-12">


                        <!-- content tabs nav -->
                        <ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab"
                                    aria-controls="tab-1" aria-selected="true">NOW
                                    SHOWING</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-2" role="tab"
                                    aria-controls="tab-2" aria-selected="false">COMING SOON</a>
                            </li>


                        </ul>
                        <!-- end content tabs nav -->

                        <!-- content mobile tabs nav -->
                        <div class="content__mobile-tabs" id="content__mobile-tabs">
                            <div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <input type="button" value="New items">
                                <span></span>
                            </div>

                            <div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="1-tab" data-toggle="tab"
                                            href="#tab-1" role="tab" aria-controls="tab-1"
                                            aria-selected="true">NEW
                                            RELEASES</a></li>

                                    <li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab"
                                            href="#tab-2" role="tab" aria-controls="tab-2"
                                            aria-selected="false">MOVIES</a></li>


                                </ul>
                            </div>
                        </div>
                        <!-- end content mobile tabs nav -->
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- content tabs -->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="1-tab">
                    <div class="row">
                        @foreach ($movies as $movie)
                            @if ($movie->Status == 'Screening')
                                <!-- card -->
                                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                    <div class="card">
                                        <div class="card__cover">
                                            <img src="{{asset('Admin/img/movie/'.$movie->ImgURL)}}" alt="">
                                            <a href="#" class="card__play">
                                                <i class="icon ion-ios-play"></i>
                                            </a>
                                        </div>
                                        <div class="card__content">
                                            <h3 class="card__title"><a
                                                    href="#">{{ $movie->MovieName }}</a>
                                            </h3>
                                            <span class="card__category">
                                                <a href="#">{{ $movie->Genre }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            @endif
                        @endforeach

                    </div>
                </div>


                <!---Tab 2 --->
                <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="2-tab">
                    <div class="row">
                        @foreach ($movies as $movie)
                            <!--- ****card__cover img {width: 160px;height: 230px;;} --->
                            @if ($movie->Status == 'Not Screening')
                                <!-- card -->
                                <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                                    <div class="card">
                                        <div class="card__cover">
                                            <img src="{{asset('Admin/img/movie/'.$movie->ImgURL)}}" alt="">
                                            <a href="#" class="card__play">
                                                <i class="icon ion-ios-play"></i>
                                            </a>
                                        </div>
                                        <div class="card__content">
                                            <h3 class="card__title"><a
                                                    href="#">{{ $movie->MovieName }}</a>
                                            </h3>
                                            <span class="card__category">
                                                <a href="#">{{ $movie->Genre }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <!-- end card -->


                    </div>


                </div>
            </div>
    </section>
    <!-- end expected premiere -->

    <!-- partners -->
    <section class="section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-12">
                    <h2 class="section__title section__title--no-margin">Our Partners</h2>
                </div>
                <!-- end section title -->

                <!-- section text -->
                <div class="col-12">
                    <p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact
                        that
                        a reader will be distracted by the readable content of a page when looking at its layout.
                        The
                        point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                        opposed to using.</p>
                </div>
                <!-- end section text -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="fontend/img/partners/themeforest-light-background.png" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="fontend/img/partners/audiojungle-light-background.png" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="fontend/img/partners/codecanyon-light-background.png" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="fontend/img/partners/photodune-light-background.png" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="fontend/img/partners/activeden-light-background.png" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->

                <!-- partner -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="#" class="partner">
                        <img src="fontend/img/partners/3docean-light-background.png" alt=""
                            class="partner__img">
                    </a>
                </div>
                <!-- end partner -->
            </div>
        </div>
    </section>
    <!-- end partners -->

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
                        <li><a href="{{ url('About') }}">About Us</a></li>
                        <li><a href="#">Pricing Plan</a></li>
                        <li><a href="#">Help</a></li>
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
    <script src="fontend/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @include('sweetalert::alert')


</body>

</html>
