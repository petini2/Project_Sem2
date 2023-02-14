@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Show.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Add New Show</span>
            </div> 
            <div class="pull-right create">                
                <a href="/a" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('show.index')}}" class="back-link">Show</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">Create</a>
            </div>
        </div>
        <div class="insert">
            <form method="post" action="{{ route('show.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <strong>Movie:</strong>
                    <select name="MovieID">
                        @foreach ($allMovie as $eachMovie)
                        <option value="{{$eachMovie->id}}">{{$eachMovie->id}} - {{$eachMovie->Name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Show time:</strong>
                    <select name="ShowtimeID">
                        @foreach ($allShowtime as $eachShowtime)
                        <option value="{{$eachShowtime->id}}">{{$eachShowtime->id}} - {{$eachShowtime->StartTime}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Screen No</strong>
                    <input type="nuimber" class="form-control" id="ScreenNo" placeholder="ScreenNo" name="ScreenNo" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-warning" href="{{ route('show.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
