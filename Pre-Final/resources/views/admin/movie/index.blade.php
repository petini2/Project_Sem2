@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Movie.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>All Movies</span>
            </div> 
            <div class="pull-right create">
                <a class="btn btn-danger btn-lg " href="{{route('movie.create')}}">New</a>
            </div>
        </div>
        <ul class="listmovie">
            @foreach ($movies as $m)
                <a class="listmovie" href="{{route('movie.show',$m->id)}}">
                    <div class="card">
                        <img src="{{asset('Admin/img/movie/'.$m->ImgURL)}}" alt="Image" class="card-img-top" style="width: 190px; height: 250px; margin: 5px; border-radius: 15px">
                        <h5 class="card-title text-center">{{$m->MovieName}}</h5>
                    </div>
                </a>
            @endforeach
        </ul>
        <div style=" margin-left: 10px;">        
            {!! $movies->links('pagination::bootstrap-4') !!}
        </div>
    </div>    
@endsection