
@section('title', 'User Page')

@section('css')
    <link href="{{ asset('css/flixgo.css') }}" rel="stylesheet">
@endsection
@section('content')
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

<link rel="icon" type="image/png" href="fontend/icon/logo.png" sizes="32x32">
	<link rel="apple-touch-icon" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="72x72" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="114x114" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="144x144" href="fontend/icon/logo.png">
<body class="body">
    <div class="container">
        <meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>HUMMING CINEMA</title>

    <header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="{{route('home')}}" class="header__logo">
								<img src="fontend/img/HUMMINGLOGO.png" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								{{-- <li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuHome" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Booking list</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">

									</ul>
								</li>


								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-notifications-outline"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
								</ul>
								</li> --}}

							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-body"></i></a>
                                    <ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
                                        <li>
                                            <form action="/logout" method="POST">
                                                @csrf
                                                <li id="nameli">
                                                    {{ Auth::user()->name }}
                                                </li>
                                                <button id="btndropdown">logout</button>
                                            </form>
                                        </li>
                                        <li><a href="{{url('edit')}}" class="ionios">Edit profile</a></li>
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
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

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

    <div class="col-12">
        <h1 class="home__title"><b>Your </b>Interest List</h1>


        <div class="col-12">
            <div class="row">
                @foreach ($movies as $movie)
                <!-- card -->
                <div class="card card--big" id="card--big">
                    <div class="card__padding">
                        <div class="card__icover">
                            <img src="{{asset('Admin/img/movie/'.$movie->ImgURL)}}" height="300px">
                            <a href="{{ url('detail', $movie->id) }}" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                            <div class="card__content">
                            <h3 class="card__title"><a href="{{ url('detail', $movie->id) }}">{{ $movie->MovieName }}</a></h3>
                            <span class="card__detail">{{ $movie->Language }}</span>

                            <span class="card__detail">Duration: {{ $movie->Duration}}</span> <br>
                            <span class="card__detail">
                                Release: {{ $movie->ReleaseDate}}
                            </span>
                            <span class="card__category">
                                <a href="{{ url('detail', $movie->id) }}">{{ $movie->Genre }}</a>
                            </span>
                            <span class="card__btn">
                                <form action="{{ route('user.markinterest', $movie->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="ion ion-md-heart-dislike"></button>
                                </form>
                            </span>

                            <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
                        </div>
                    </div>
                </div>

                <!-- end card -->
                @endforeach

        </div>
    </div>


</section>
	<!-- end home -->

	<!-- expected premiere -->
	<section class="section section--bg" data-bg="fontend/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title">Some Suggestion For You</h2>
				</div>
				<!-- end section title -->
                @foreach($suggestedMovies as $key => $movie)
                @if($key<6)
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
							<h3 class="card__title"><a href="{{ url('detail', $movie->id) }}">{{ $movie->MovieName }}</a></h3>
							<span class="card__category">
								<a href="#">{{ $movie->Genre }}</a>
							</span>
							<span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>
						</div>
					</div>
				</div>
				<!-- end card -->
                @endif
                @endforeach


				<!-- section btn -->
				<div class="col-12">
					<a href="{{ url('cataloge') }}" class="section__btn">Show more</a>
				</div>
				<!-- end section btn -->
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
					<p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="fontend/img/partners/themeforest-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="fontend/img/partners/audiojungle-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="fontend/img/partners/codecanyon-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="fontend/img/partners/photodune-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="fontend/img/partners/activeden-light-background.png" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="fontend/img/partners/3docean-light-background.png" alt="" class="partner__img">
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
						<li><a href="#"><img src="fontend/img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
						<li><a href="#"><img src="fontend/img/google-play-badge.png" alt=""></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Resources</h6>
					<ul class="footer__list">
						<li><a href="{{url('About')}}">About Us</a></li>
						<li><a href="#">Pricing Plan</a></li>

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

        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif


        {{-- <h2>Notifications</h2>
        <ul>
            @foreach (auth()->user()->notifications as $notification)
                <li>{{ $notification->message }}</li>
            @endforeach
        </ul> --}}
        {{--
        <h2>Interesting Movies</h2>
        <ul>
            @foreach (auth()->user()->favoriteMovies as $movie)
                <li>{{ $movie->title }}</li>
            @endforeach
        </ul> --}}
        {{--
        <h2>Movie Theater Details</h2>
        <p>Number of screens: {{ $theater->numScreens }}</p>
        <p>Concession options: {{ $theater --}}
    </div>
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
