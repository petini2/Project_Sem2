<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
                            <a href="/" class="header__logo">
                                <img src="fontend/img/HUMMINGLOGO.png" alt="">
                            </a>
                            <!-- end header logo -->

                            <!-- header nav -->
                            <ul class="header__nav">
                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="/">Home</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                {{-- <li class="header__nav-item">
									<a class="header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="{{url('cataloge')}}"></a></li>
										<li><a href="{{url('details1')}}">Movie</a></li>
									</ul>
								</li> --}}

                                <li class="header__nav-item">
                                    <a href="{{url('/gcataloge')}}" class="header__nav-link"
                                        id="dropdownMenuHome">Movies</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="{{ route('alertn') }}">Show</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->
                                <li class="header__nav-item">
                                    <a class="header__nav-link" href="{{ route('alertn') }}">News &
                                        Offers</a>
                                </li>
                                <!-- end dropdown -->

                                <!-- dropdown -->

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

    <section style="padding-top: 100px">
        <div class="container">
            <div class="row">
                <div class="col-md-6-offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Contact Us
                        </div>
                        <div class="card-body">
                            @if (Session::has('message_send'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('message_send')}}
                                </div>
                            @endif
                            <form action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="phonenum">PhoneNumber</label>
                                    <input type="text" name="phonenum" class="form-control">
                                </div>
                                <div class="fomr-group">
                                    <label for="msg">Message</label>
                                    <textarea name="msg" class="form-control"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary ">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    @include('sweetalert::alert')
</body>
</html>
