@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Movie.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Add New Movie</span>
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('movie.index')}}" class="back-link">Movie</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">Create</a>
            </div>
        </div>
        <div class="insert">
                <form method="post" action="{{route('movie.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <strong>Name</strong>
                        <input type="text" class="form-control" id="MovieName" placeholder="Name" name="MovieName" />
                    </div>
                    <div class="form-group">
                        <strong>Language</strong>
                        <input type="text" class="form-control" id="Language" placeholder="Language" name="Language" />
                    </div>
                    <div class="form-group">
                        <strong>Genre</strong>
                        <input type="text" class="form-control" id="Genre" placeholder="Genre" name="Genre" />
                    </div>
                    <div class="form-group">  
                        <strong>Status</strong>              
                        <select name='Status' id="Status" style="border-radius:5px; background: rgb(35 36 54); margin-left:15px; color: rgb(255 249 249);">
                            <option value="">Select Status</option>
                            <option value="Screening">Screening</option>
                            <option value="Not Screening">Not Screening</option>
                            <option value="Stop Screening">Stop Screening</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Release Date</strong>
                        <input type="date" class="form-control" id="ReleaseDate" placeholder="ReleaseDate" name="ReleaseDate" placeholder="mm-dd-yyyy" />
                    </div>
                    <div class="form-group">
                        <strong>Duration</strong>
                        <input type="text" required pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" class="form-control" id="Duration" placeholder="00:00:00" name="Duration" />
                    </div>
                    <div class="form-group">
                        <strong>Image</strong>
                        <input type="file" class="form-control" id="ImgURL" name="ImgURL" placeholder="No file choosen" />
                    </div>
                    <div class="form-group">
                        <strong>Trailer</strong>
                        <input type="text" class="form-control" id="Trailer" placeholder="https://www.youtube.com/embed/" name="Trailer">
                    </div>
                    <div class="form-group">
                        <strong>Description</strong>
                        <textarea class="form-control" id="Description" name="Description" placeholder="Description"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a class="btn btn-warning" href="{{ route('movie.index') }}">Back</a>
                    </div>
                </form>
        </div>
    </div>
@endsection