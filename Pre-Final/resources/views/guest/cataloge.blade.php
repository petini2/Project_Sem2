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
    <link rel="icon" type="image/png" href="fontend/icon/logo.png" sizes="32x32">
	<link rel="apple-touch-icon" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="72x72" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="114x114" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="144x144" href="fontend/icon/logo.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HUMMING CINEMA</title>

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
                            <a href="{{ url('/') }}" class="header__logo">
                                <img src="fontend/img/HUMMINGLOGO.png" alt="">
                            </a>
                            <!-- end header logo -->

                            <!-- header nav -->
                            <ul class="header__nav">
                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="{{ url('/') }}">Home</a>
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
                                    <a class="dropdown-toggle header__nav-link" href="{{ url('gnewsandoffers') }}">News &
                                        Offers</a>
                                </li>
                                <!-- end dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="{{url('gcontact-us')}}">Contact Us</a>
                                </li>

                                <!-- dropdown -->

                                <!-- end dropdown -->
                            </ul>
                            <!-- end header nav -->

                            <!-- header auth -->
                            <div class="header__auth">
                                <button class="header__search-btn" type="button">
                                    <i class="icon ion-ios-search"></i>
                                </button>

                                    <a href={{asset('login')}} class="header__sign-in">
                                        <i class="icon ion-ios-log-in"></i>
                                        <span>sign in</span>
                                    </a>
                                </div>
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
                            <li class="breadcrumb__item"><a href="{{ url('/') }}">Home</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="filter__content">
                        <div class="filter__items">
                            <!-- filter item -->
                            <div class="filter__item" id="filter__genre">
                                <span class="filter__item-label">GENRE:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="Action/Adventure">
                                    <span></span>
                                </div>

                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown"
                                    aria-labelledby="filter-genre">
                                    <li>Action/Adventure</li>
                                    <li>Animals</li>
                                    <li>Animation</li>
                                    <li>Biography</li>
                                    <li>Comedy</li>
                                    <li>Cooking</li>
                                    <li>Dance</li>
                                    <li>Documentary</li>
                                    <li>Drama</li>
                                    <li>Education</li>
                                    <li>Entertainment</li>
                                    <li>Family</li>
                                    <li>Fantasy</li>
                                    <li>History</li>
                                    <li>Horror</li>
                                    <li>Independent</li>
                                    <li>International</li>
                                    <li>Kids</li>
                                    <li>Kids & Family</li>
                                    <li>Medical</li>
                                    <li>Military/War</li>
                                    <li>Music</li>
                                    <li>Musical</li>
                                    <li>Mystery/Crime</li>
                                    <li>Nature</li>
                                    <li>Paranormal</li>
                                    <li>Politics</li>
                                    <li>Racing</li>
                                    <li>Romance</li>
                                    <li>Sci-Fi/Horror</li>
                                    <li>Science</li>
                                    <li>Science Fiction</li>
                                    <li>Science/Nature</li>
                                    <li>Spanish</li>
                                    <li>Travel</li>
                                    <li>Western</li>
                                </ul>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__quality">
                                <span class="filter__item-label">QUALITY:</span>

                                <div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="HD 1080">
                                    <span></span>
                                </div>

                                <ul class="filter__item-menu dropdown-menu scrollbar-dropdown"
                                    aria-labelledby="filter-quality">
                                    <li>HD 1080</li>
                                    <li>HD 720</li>
                                    <li>DVD</li>
                                    <li>TS</li>
                                </ul>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__rate">
                                <span class="filter__item-label">IMBd:</span>

                                <div class="filter__item-btn dropdown-toggle" role="button" id="filter-rate"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="filter__range">
                                        <div id="filter__imbd-start"></div>
                                        <div id="filter__imbd-end"></div>
                                    </div>
                                    <span></span>
                                </div>

                                <div class="filter__item-menu filter__item-menu--range dropdown-menu"
                                    aria-labelledby="filter-rate">
                                    <div id="filter__imbd"></div>
                                </div>
                            </div>
                            <!-- end filter item -->

                            <!-- filter item -->
                            <div class="filter__item" id="filter__year">
                                <span class="filter__item-label">RELEASE YEAR:</span>

                                <div class="filter__item-btn dropdown-toggle" role="button" id="filter-year"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="filter__range">
                                        <div id="filter__years-start"></div>
                                        <div id="filter__years-end"></div>
                                    </div>
                                    <span></span>
                                </div>

                                <div class="filter__item-menu filter__item-menu--range dropdown-menu"
                                    aria-labelledby="filter-year">
                                    <div id="filter__years"></div>
                                </div>
                            </div>
                            <!-- end filter item -->
                        </div>

                        <!-- filter btn -->
                        <button class="filter__btn" type="button">apply filter</button>
                        <!-- end filter btn -->
                    </div>
                </div>
            </div>
        </div>
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
                                <a href="{{ url('gdetail', $movie->id) }}" class="card__play">
                                    <i class="icon ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="card__content">
                                <h3 class="card__title"><a
                                        href="{{ route('guest.detail', $movie->id) }}">{{ $movie->MovieName }}</a>
                                </h3>
                                <span class="card__category">
                                    <a href="#">{{ $movie->Genre }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                @endforeach




                <!-- section btn -->
                <div class="col-12">
                    <a href="#" class="section__btn">Show more</a>
                </div>
                <!-- end section btn -->
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
        @include('sweetalert::alert')
</body>

</html>
