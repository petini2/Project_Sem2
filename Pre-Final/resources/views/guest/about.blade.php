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

	@include('sweetalert::alert')
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
							<a href="/" class="header__logo">
								<img src="fontend/img/HUMMINGLOGO.PNG" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="/" role="button" id="dropdownMenuHome" aria-haspopup="true" aria-expanded="false">Home</a>


								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="{{route('alert')}}" role="button" id="" aria-haspopup="true" aria-expanded="false">Catalog</a>


								</li>
								<!-- end dropdown -->
								<!-- dropdown -->
								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="about.html">About</a></li>

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

								<a href="signin.html" class="header__sign-in">
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

	<!-- page title -->
	<section class="section section--first section--bg" data-bg="fontend/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<!-- section title -->
						<h2 class="section__title">About Us</h2>
						<!-- end section title -->

						<!-- breadcrumb -->
						<ul class="breadcrumb">
							<li class="breadcrumb__item"><a href="#">Home</a></li>
							<li class="breadcrumb__item breadcrumb__item--active">About Us</li>
						</ul>
						<!-- end breadcrumb -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end page title -->

	<!-- about -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title"><b>HUMMING CINEMA</b> – Best Place for Movies</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text">We are bringing to you <b>the mordern cinema</b> with all the newest product, mordern cinema screening system to perform the best service.</p>

					<p class="section__text section__text--last-with-margin">'Content here, content here', making it look like <a href="#">readable</a> English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
				</div>
				<!-- end section text -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-tv feature__icon"></i>
						<h3 class="feature__title">Ultra HD</h3>
						<p class="feature__text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-film feature__icon"></i>
						<h3 class="feature__title">Film</h3>
						<p class="feature__text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-trophy feature__icon"></i>
						<h3 class="feature__title">Awards</h3>
						<p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-notifications feature__icon"></i>
						<h3 class="feature__title">Notifications</h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-rocket feature__icon"></i>
						<h3 class="feature__title">Rocket</h3>
						<p class="feature__text">It to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
					</div>
				</div>
				<!-- end feature -->

				<!-- feature -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="feature">
						<i class="icon ion-ios-globe feature__icon"></i>
						<h3 class="feature__title">Multi Language Subtitles </h3>
						<p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
					</div>
				</div>
				<!-- end feature -->
			</div>
		</div>
	</section>
	<!-- end about -->

	<!-- how it works -->
	<section class="section section--dark">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">How it works?</h2>
				</div>
				<!-- end section title -->

				<!-- how box -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="how">
						<span class="how__number">01</span>
						<h3 class="how__title">Create an account</h3>
						<p class="how__text">It has never been an issue to find an old movie or TV show on the internet. However, this is not the case with the new releases.</p>
					</div>
				</div>
				<!-- ebd how box -->

				<!-- how box -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="how">
						<span class="how__number">02</span>
						<h3 class="how__title">Choose your Plan</h3>
						<p class="how__text">It has never been an issue to find an old movie or TV show on the internet. However, this is not the case with the new releases.</p>
					</div>
				</div>
				<!-- ebd how box -->

				<!-- how box -->
				<div class="col-12 col-md-6 col-lg-4">
					<div class="how">
						<span class="how__number">03</span>
						<h3 class="how__title">Enjoy MovieGo</h3>
						<p class="how__text">It has never been an issue to find an old movie or TV show on the internet. However, this is not the case with the new releases.</p>
					</div>
				</div>
				<!-- ebd how box -->
			</div>
		</div>
	</section>
	<!-- end how it works -->

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
						<li><a href="#">About Us</a></li>
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
