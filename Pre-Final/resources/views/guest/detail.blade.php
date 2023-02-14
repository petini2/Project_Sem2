<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ url('fontend/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/nouislider.min.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/plyr.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/default-skin.css') }}">
    <link rel="stylesheet" href="{{ url('fontend/css/main.css') }}">

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
                                <img src="{{ url('fontend/img/HUMMINGLOGO.png') }}" alt="">
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
                                    <a href="{{url('/gcataloge')}}" class="dropdown-toggle header__nav-link"
                                        id="dropdownMenuHome">Movies</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="dropdown-toggle header__nav-link" href="{{ route('alertn') }}">News
                                        &
                                        Offers</a>
                                </li>
                                <!-- end dropdown -->
                                <!-- dropdown -->
                                <li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="{{url('about')}}">About</a></li>

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
                                    <a href={{ asset('login') }} class="header__sign-in">
                                        <i class="icon ion-ios-log-in"></i>
                                        <span>sign in</span>
                                    </a>

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
        <form action="{{ asset('search/') }}" class="header__search">
            <form action="{{ url('search') }}" role="search" method="get" type="get"
                class="header__search">
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

    <!-- details -->
    <section class="section details">
        <!-- details background -->
        <div class="details__bg" data-bg="fontend/img/home/home__bg.jpg"></div>
        <!-- end details background -->

        <!-- details content -->
        <div class="container">
            <div class="row">
                <!-- title -->
                <div class="col-12">
                    <h1 class="details__title">{{ $movies->MovieName }}</h1>
                </div>
                <!-- end title -->

                <!-- content -->
                <div class="col-12 col-xl-6">
                    <div class="card card--details">
                        <div class="row">
                            <!-- card cover -->
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                                <div class="card__cover">
                                    {{-- .card--details .card__cover img {
                                        width: 100%;
                                        height: 280px;
                                      } --}}
                                    <img src="{{asset('Admin/img/movie/'.$movies->ImgURL)}}" alt="">
                                </div>
                            </div>
                            <!-- end card cover -->

                            <!-- card content -->
                            <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                                <div class="card__content">
                                    <div class="card__wrap">

                                        <ul class="card__list">
                                            <li>HD</li>
                                            <li>16+</li>
                                        </ul>
                                    </div>
                                    <ul class="card__meta">
                                        <li><span>Genre:</span> <a href="#">{{ $movies->Genre }}</a>
                                        </li>
                                        <li><span>Release year:</span>{{ $movies->ReleaseDate }}</li>
                                        <li><span>Running time:</span> {{ $movies->Duration }}</li>
                                        <li><span>Language:</span> <a href="#">{{ $movies->Language }}</a>
                                        </li>
                                        <li><span class="card__btn"> <form action="{{ url('/alert') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="ion ion-md-heart"></button>
                                        </form></span></li>
                                        <a href="{{ route('alertn') }}" class="header__sign-in">
                                            <i class="icon ion-ios-log-in"></i>
                                            <span>Buy ticket</span>
                                        </a>
                                    </ul>

                                    <div class="card__description card__description--details">
                                        {{ $movies->Description }}
                                    </div>




                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end content -->

                <!-- player -->
                <div class="col-12 col-xl-6">
                    <iframe width="500" height="300" frameborder="0"
                        src="{{ url($movies->Trailer) }}"></iframe>
                </div>
                <!-- end player -->

                {{-- <div class="container">
                    <div class="row">
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <section class="customer-logos ">
                                <div class="cast">
                                    @foreach ($movies->casts as $c)
                                        <img src="{{ url($c->Picture) }}">
                                        <li>{{ $c->Name }}</li>
                                        <li>{{ $c->Gender }}</li>
                                        <li>{{ $c->DOB }}</li>
                                    @endforeach
                                </div>
                            </section>
                        </div>
                    </div>
                </div> --}}


                <div class="col-12">
                    <div class="details__wrap">


                        <!-- share -->
                        <div class="details__share">
                            <span class="details__share-title">Share with friends:</span>

                            <ul class="details__share-list">
                                <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a>
                                </li>
                                <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a>
                                </li>
                                <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a>
                                </li>
                                <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                            </ul>
                        </div>
                        <!-- end share -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end details content -->
    </section>
    <!-- end details -->
    <div class="catalog">
        <div class="container">
            <h1 class="details__title">Cast</h1>
            <div class="row">
                @foreach ($movies->casts as $c)
                    <!-- card -->
                    <div class="col-12 col-sm-4 col-lg-3 col-xl-2">
                        <div class="card">
                            <div class="cast">
                                <img src="{{asset('Admin/img/cast/'.$c->Picture)}}" alt="">
                            </div>
                            <div class="card__content">
                                <h3 class="card__title">{{ $c->Name }}
                                </h3>
                                <span class="card__category">
                                    <a href="#">{{ $c->Gender }}</a>
                                </span>
                                <span class="card__category">
                                    <a href="#">{{ $c->DOB }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                @endforeach




            </div>
        </div>



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

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe.
                                                                  It's a separate element, as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">

                    <div class="pswp__top-bar">

                        <!--  Controls are self-explanatory. Order can be changed. -->

                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

                        <!-- Preloader -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>

                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JS -->
        <!-- JS -->
        <script src="{{ url('fontend/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('fontend/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ url('fontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('fontend/js/jquery.mousewheel.min.js') }}"></script>
        <script src="{{ url('fontend/js/jquery.mCustomScrollbar.min.js') }}"></script>
        <script src="{{ url('fontend/js/wNumb.js') }}"></script>
        <script src="{{ url('fontend/js/nouislider.min.js') }}"></script>
        <script src="{{ url('fontend/js/plyr.min.js') }}"></script>
        <script src="{{ url('fontend/js/jquery.morelines.min.js') }}"></script>
        <script src="{{ url('fontend/js/photoswipe.min.js') }}"></script>
        <script src="{{ url('fontend/js/photoswipe-ui-default.min.js') }}"></script>
        <script src="{{ url('fontend/js/main.js') }}"></script>
        @include('sweetalert::alert')
</body>

</html>
