@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Movie.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Edit Movie</span>
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('movie.index')}}" class="back-link">Movie</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">{{$movie->MovieName}}</a>
            </div>
        </div>
        <div class="edit">
                <form method="post" action="{{route('movie.update',$movie->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')  
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" class="form-control" id="v" value="{{$movie->MovieName}}" name="MovieName" />
                    </div>
                    <div class="form-group">
                        <strong>Language</strong>
                        <input type="text" class="form-control" id="Language" value="{{$movie->Language}}" name="Language" />
                    </div>
                    <div class="form-group">
                        <strong>Genre</strong>
                        <input type="text" class="form-control" id="Genre" value="{{$movie->Genre}}" name="Genre" />
                    </div>
                    <div class="form-group">  
                        <strong>Status</strong>              
                        <select name='Status' id="Status">
                            <option value="Screening" {{ $movie->Status == 'Screening' ? 'selected' : '' }}>Screening</option>
                            <option value="Not Screening" {{ $movie->Status == 'Not Screening' ? 'selected' : '' }}>Not Screening</option>
                            <option value="Stop Screening" {{ $movie->Status == 'Stop Screening' ? 'selected' : '' }}>Stop Screening</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Release Date</strong>
                        <input type="date" class="form-control" id="ReleaseDate" value="{{$movie->ReleaseDate}}"name="ReleaseDate" />
                    </div>
                    <div class="form-group">
                        <strong>Duration</strong>
                        <input type="text" required pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}"class="form-control" id="Duration" name="Duration" value="{{$movie->Duration}}">
                    </div>
                    <div class="form-group">
                        <strong>Description</strong>
                        <textarea class="form-control" id="Description" name="Description">{{$movie->Description}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class=" pull-left">
                            <strong>Image</strong>
                            <div>
                                    <img src="{{asset('Admin/img/movie/'.$movie->ImgURL)}}" alt="Image" style="width:  150px;">       
                                    <input type="file" class="form-control" id="ImgURL" name="ImgURL" style="margin-top: 10px;"/>
                            </div>
                        </div>                        
                        <div class="pull-right">
                            <strong>Trailer</strong>
                            <div>
                                <iframe src="{{$movie->Trailer}}" height="180px"frameborder="0" allow="accelerometer;  
                                    clipboard-write; encrypted-media; gyroscope;" allowfullscreen>
                                </iframe>                                     
                                <input type="text" class="form-control" id="Trailer" value="{{$movie->Trailer}}" name="Trailer"  style="margin-top: 10px; height: 40px;">
                            </div>                      
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-warning" href="{{route('movie.index')}}">Back</a>
                </form>
        </div>
    </div>
@endsection