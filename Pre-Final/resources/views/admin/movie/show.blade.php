@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Movie.css')}}">
    <div class="container-fluid">        
        <div class="head">
            <div class="pull-left title">
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('movie.index')}}" class="back-link">Movie</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a style="font-weight: 700;" class="back-link">{{$movie->MovieName}}</a>
            </div>
        </div>
        <div id="MovieDetail">
            <div style="height: 500px;">
                <div class="pull-left">
                    <img src="{{asset('Admin/img/movie/'.$movie->ImgURL)}}" alt="Image" id="MoviePic">
                </div>
                <div class="pull-right MovieInfo">
                    <div>
                        <p><strong>Name:  </strong>&nbsp;{{$movie->MovieName}}</p>
                        <p><strong>Language:  </strong>&nbsp;{{$movie->Language}}</p>
                        <p><strong>Genre</nav>:  </strong>&nbsp;{{$movie->Genre}}</p>
                        <p><strong>Status:  </strong>&nbsp;{{$movie->Status}}</p>
                        <p><strong>Release:  </strong>&nbsp;{{$movie->ReleaseDate}}</p>
                        <p><strong>Duration:  </strong>&nbsp;{{$movie->Duration}}</p>
                        <p><strong>Description:  </strong>&nbsp;{{$movie->Description}}</p>
                    </div>
                </div>
            </div>
            <div id="Trailer" style="margin-left: 35px">
                <iframe src="{{$movie->Trailer}}" frameborder="0" allow="accelerometer;  
                    clipboard-write; encrypted-media; gyroscope;" allowfullscreen>
                </iframe>  
            </div>            
            <form action="{{route('movie.destroy',$movie->id)}}" method="post" id="Action">
                <a class="btn btn-info" href="{{route('movie.edit', $movie->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection