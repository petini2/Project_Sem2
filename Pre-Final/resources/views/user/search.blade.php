@extends('layouts.main')
@section('content')
    <section class="section">
        <div class="catalog">
            <div class="container">
                <div class="row">
                    @foreach ($movies as $movie)
                        <!-- card -->
                        <div class="col-6 col-sm-4 col-lg-3 col-xl-2">
                            <div class="card">
                                <div class="card__cover">
                                    <img src="{{ url($movie->ImgURL) }}" alt="">
                                    <a href="{{ url('detail', $movie->id) }}" class="card__play">
                                        <i class="icon ion-ios-play"></i>
                                    </a>
                                </div>
                                <div class="card__content">
                                    <h3 class="card__title"><a
                                            href="{{ url('detail', $movie->id) }}">{{ $movie->MovieName }}</a>
                                    </h3>
                                    <span class="card__category">
                                        <a href="#">{{ $movie->Genre }}</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    @endforeach




                </div>
            </div>
    </section>
@endsection
