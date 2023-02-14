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
						<!-- authorization form -->
						<form method="POST" action="{{route('login')}}" class="sign__form">
                            @csrf
							<a href="/" class="sign__logo">
								<img src="fontend/img/logotest2.png" alt="">
							</a>
                            @error('email')
                                  <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
							<div class="sign__group">
                                <input id="email" type="email"  class="sign__input" placeholder="Email" @error('email') class="is-invalid" @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                              </div>

                              <div class="sign__group">
                                <input id="password" type="password" @error('password') class="is-invalid" @enderror name="password" required autocomplete="current-password" class="sign__input" placeholder="Password">
                                @error('password')
                                  <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                              </div>

							<div class="sign__group sign__group--checkbox">
								 <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
							</div>

							<button type="submit" class="sign__btn">
                                {{ __('Login') }}
                            </button>

							<span class="sign__text">Don't have an account? <a href="{{route('register')}}">Sign up!</a></span>

							@if (Route::has('password.request'))
                                    <span class="sign__text"><a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a></span>
                                @endif
						</form>
						<!-- end authorization form -->
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
