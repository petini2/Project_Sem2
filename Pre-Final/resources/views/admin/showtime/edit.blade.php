@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Showtime.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Edit Show Time</span>
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('showtime.index')}}" class="back-link">Show Time</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">{{$showtime->StartTime}}</a>
            </div>
        </div>
        <div class="edit">
            <form method="post" action="{{route('showtime.update',$showtime->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group edit-form-group">
                    <strong>Start Time</strong>
                    <input type="text" class="form-control" id="StartTime" value="{{$showtime->StartTime}}" name="StartTime" />
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-warning" href="{{route('showtime.index')}}">Back</a>
            </form>
    </div>
</div>
@endsection