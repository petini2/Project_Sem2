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

	<div class="sign section--bg" data-bg="fontend/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form method="POST" action="{{route('register')}}" class="sign__form">

                            @csrf
                            <a href="/" class="sign__logo">
                                <img src="fontend/img/logotest2.png" alt="">
                            </a>

                            <div class="sign__group">
                                <input type="text" class="sign__input" placeholder="Firstname" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="sign__group">
                                <input type="text" class="sign__input" placeholder="Lastname" id="lastname" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="sign__group">
                                <input type="email" class="sign__input" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="sign__group">
                                <input id="phonenum" type="phonenum" class="sign__input" placeholder="PhoneNumber" name="phonenum" required autocomplete="phonenum" autofocus>
                                @error('phonenum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="sign__group">
                                <input id="password" type="password" class="sign__input" placeholder="Password" name="password" required autocomplete="new-password" autofocus>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="sign__group">
                                <input id="password-confirm" type="password" class="sign__input" placeholder="Password confirm" name="password_confirmation" required autocomplete="new-password">
                            </div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="https://www.filmindependent.org/privacy-policy/">Privacy Policy</a></label>
							</div>

							<button class="sign__btn" type="submit">Register</button>

							<span class="sign__text">Already have an account? <a href="{{route('login')}}">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

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
