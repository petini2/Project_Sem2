@extends('layouts.main')
@section('content')
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
                            <li class="breadcrumb__item breadcrumb__item--active">Show</li>

                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <head>

        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/base/default/aw_blog/css/style.css"
            media="all" />
        <script type="text/javascript" src="https://www.cgv.vn/js/prototype/prototype.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/lib/jquery/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/lib/jquery/noconflict.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/lib/ccard.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/prototype/validation.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/scriptaculous/builder.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/scriptaculous/effects.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/scriptaculous/dragdrop.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/scriptaculous/controls.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/scriptaculous/slider.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/varien/js.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/varien/form.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/mage/translate.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/mage/cookies.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/js/google/ga.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/modernizr.custom.min.js">
        </script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/selectivizr.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/matchMedia.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/matchMedia.addListener.js">
        </script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/enquire.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/cgv.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/app.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/jquery.cycle2.min.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/jquery.cycle2.swipe.min.js">
        </script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/jquery.cycle2.carousel.js">
        </script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/slideshow.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/lib/imagesloaded.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/enterprise/js/scripts.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/minicart.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/default/js/jquery.colorbox.js"></script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/enterprise/js/enterprise/catalogevent.js">
        </script>
        <script type="text/javascript" src="https://www.cgv.vn/skin/frontend/cgv/enterprise/js/enterprise/wishlist.js"></script>
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:300,400,500,700,600" />
        <!--[if (lte IE 8) & (!IEMobile)]>
                                                                                                                                                                                        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/default/css/styles-ie8.css"
                                                                                                                                                                                            media="all" />
                                                                                                                                                                                        <link rel="stylesheet" type="text/css"
                                                                                                                                                                                            href="https://www.cgv.vn/skin/frontend/cgv/enterprise/css/enterprise-ie8.css" media="all" />
                                                                                                                                                                                        <link rel="stylesheet" type="text/css"
                                                                                                                                                                                            href="https://www.cgv.vn/skin/frontend/cgv/default/css/madisonisland-ie8.css" media="all" />
                                                                                                                                                                                        <![endif]-->
        <!--[if (gte IE 9) | (IEMobile)]>
                                                                                                                                                                                        <!-->
        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/enterprise/css/enterprise.css"
            media="all" />
        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/default/css/styles.css"
            media="all" />
        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/default/css/colorbox.css"
            media="all" />
        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/default/css/madisonisland.css"
            media="all" />
        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/default/css/g-erp-cgv.css"
            media="all" />
        <link rel="stylesheet" type="text/css" href="https://www.cgv.vn/skin/frontend/cgv/default/css/custom-cgv.css"
            media="all" />
        <!--<![endif]-->

        <!-- The core Firebase JS SDK is always required and must be listed first -->
        <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-messaging.js"></script>
    </head>

    <body class=" cinox-site-view">

        <div class="main-container col1-layout">
            <div class="main">
                <div class="col-main">
                    <div class="showtimes-wrap">
                        <div class="showtimes-container">

                            <div class="product-collateral toggle-content tabs tabs-format-cgv cgv-schedule-v2">

                                <dd class="tab-container">
                                    <div class="tab-content">
                                        <div class="carousel" id="first">
                                            <div class="datewrapper">
                                                <ul>
                                                    @foreach ($all_dates as $d)
                                                        <li class="day cgv-onlyone" lang="cgv_site_004" id="cgv20230213"
                                                            onclick="getscheduledate('20230213',this)">
                                                            <span>{{ $d }}</span>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                            </div><a href="#" class="previous">&lt;</a><a href="#"
                                                class="next">&gt;</a>
                                        </div>
                                        <div class="product-collateral tabs tabs-cgv-showtimes">
                                            <div class="film-list">
                                                @foreach ($movies as $movie)
                                                    <div class="film-label">
                                                        <h3><a href="" title="">
                                                                {{ $movie->MovieName }}
                                                                {{-- <span class="icon-C16">C16</span> --}}
                                                            </a>
                                                        </h3>
                                                    </div>

                                                    <div class="film-left">
                                                        <div class="film-poster"><a href="{{ url('detail', $movie->id) }}"
                                                                title="{{ $movie->MovieName }}">
                                                                <img src="{{ asset('Admin/img/movie/' . $movie->ImgURL) }}"
                                                                    alt="" width="80%">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="film-right"> <strong class="film-screen std">
                                                            {{ $movie->Language }} </strong>
                                                        <div class="film-showtimes">
                                                            <ul class="products-grid-movie tab-showtime">
                                                                @foreach ($show as $sh)
                                                                    @if ($sh->MovieID == $movie->id)
                                                                        @foreach ($showtime as $shw)
                                                                            @if ($sh->ShowtimeID == $shw->id)
                                                                                <li class="item">
                                                                                    <a
                                                                                        href="https://www.cgv.vn/en/cinemas/booking/tickets/site/004/seq/7970363/dy/20230213">
                                                                                        <span>
                                                                                            <i class="hrzone4"></i>
                                                                                            {{ $shw->StartTime }}
                                                                                        </span>
                                                                                    </a>
                                                                                </li>
                                                                            @endif
                                                                        @endforeach
                                                                    @endif
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                </dd>

                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Facebook Pixel Code -->


        <div id="wishlist_edit_action_container"></div>
        </div>
        </div>
    </body>

    </html>
@endsection
