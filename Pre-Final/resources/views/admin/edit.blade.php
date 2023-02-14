@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('Admin/css/Show.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Edit Profile</span>
            </div>
            <div class="pull-right create">
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="" class="back-link">Edit</a>
            </div>
        </div>
        <div class="insert">
            <form method="post" action="{{route('ad.update', $ad->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" class="form-control" value="{{ $ad->name }}" id="name" name='name'>
                </div>
                <div class="form-group">
                    <strong>Last name:</strong>
                    <input type="text" class="form-control" value="{{ $ad->lastname }}" id="lastname" name='lastname'>
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" class="form-control" value="{{ $ad->email }}" id="email" name='email'>
                </div>
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" class="form-control" value="{{ $ad->phonenum }}" id="phonenum" name='phonenum'>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-warning" href="{{ url('ad') }}">Back</a>
            </form>
        </div>
    </div>
@endsection
