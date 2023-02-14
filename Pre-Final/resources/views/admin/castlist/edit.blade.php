@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Show.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Edit Cast Role</span>
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('castlist.index')}}" class="back-link">Cast Role</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">Edit</a>
            </div>
        </div>
        <div class="insert">
            <form method="post" action="{{ route('castlist.update',$editCastlist->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <strong>Cast:</strong>
                    <select name="cast_id">
                        @foreach ($allCast as $cast)
                        <option value="{{$cast->id}}"  {{$cast->id == $editCastlist->cast_id  ? 'selected' : '' }}>{{$cast->id}} - {{$cast->Name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Movie:</strong>
                    <select name="movie_id">
                        @foreach ($allMovie as $eachMovie)
                        <option value="{{$eachMovie->id}}" {{$eachMovie->id == $editCastlist->movie_id ? 'selected' : '' }}>{{$eachMovie->id}} - {{$eachMovie->MovieName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Role</strong>
                    <input type="nuimber" class="form-control" id="Role" value="{{$editCastlist->Role}}" name="ScreeRolenNo" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-warning" href="{{ route('castlist.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
