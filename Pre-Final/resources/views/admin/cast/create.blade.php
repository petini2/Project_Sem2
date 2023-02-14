@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('Admin/css/Movie.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Add New Cast</span>
            </div>
            <div class="pull-right create">
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{ route('cast.index') }}" class="back-link">Cast</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="" class="back-link">Create</a>
            </div>
        </div>
        <div class="insert" style="height: 520px; 
        margin-left: 265px;
        margin-top: 100px;">
            <form method="post" action="{{ route('cast.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" class="form-control" id="Name" placeholder="Name" name="Name" />
                </div>
                <div class="form-group">
                    <strong>Gender</strong>
                    <select name='Gender' id="Gender">
                        <option>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>DOB</strong>
                    <input type="date" class="form-control" id="DOB" placeholder="Day of birth" name="DOB" />
                </div>
                <div class="form-group">
                    <strong>Picture</strong>
                    <input type="file" class="form-control" id="Picture" name="Picture" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-warning" href="{{ route('cast.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
