@php
    $user = Auth::user();
@endphp
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
							<a href="{{url('userindex')}}" class="header__logo">
								<img src="fontend/img/HUMMINGLOGO.PNG" alt="">
							</a>
							<!-- end header logo -->
							</ul>
							<!-- end header nav -->

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
    <body>

    <div class="row">
        <div class="col-lg-12 my-5">
            <div class="float-left">
                <h2>Edit</h2>
            </div>
            <div class="float-right">
                <a href="{{route('home')}}" class="text-white decoration-none">Back</a>
            </div>
        </div>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong <br> <br>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <body class="body">

        <div class="sign section--bg" data-bg="fontend/img/section/section.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="sign__content">
                            <!-- authorization form -->
                            <form action="{{ url('user/'.$user->id.'/update') }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="sign__group">
                                    <input id="email" type="email"  class="sign__input" placeholder="Email" name="email" value="{{ $user->email }}" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="sign__group">
                                    <input id="name" type="text" name="name" required autocomplete="current-name" class="sign__input" placeholder="name" value="{{ $user->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="sign__group">
                                    <input id="phonenum" type="text" name="phonenum" required autocomplete="current-phonenum" class="sign__input" placeholder="PhoneNumber" value="{{ $user->phonenum }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <button type="submit" class="sign__btn">
                                    {{ __('Save') }}
                                </button>


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
