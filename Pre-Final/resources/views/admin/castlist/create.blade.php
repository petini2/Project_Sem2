@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Castlist.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Add New Cast Role</span>
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('castlist.index')}}" class="back-link">Cast Role</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">Create</a>
            </div>
        </div>
        <div class="insert">
            <form method="post" action="{{ route('castlist.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <strong>Cast:</strong>
                    <select name="cast_id">
                        @foreach ($allCast as $eachCast)
                        <option value="{{$eachCast->id}}">{{$eachCast->id}} - {{$eachCast->Name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Movie:</strong>
                    <select name="movie_id">
                        @foreach ($allMovie as $eachMovie)
                        <option value="{{$eachMovie->id}}">{{$eachMovie->id}} - {{$eachMovie->MovieName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Role</strong>
                    <input type="text" class="form-control" id="Role" placeholder="Role" name="Role" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-warning" href="{{ route('castlist.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
