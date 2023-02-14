@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Castlist.css')}}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Add News Or Offer</span>
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('newsoffer.index')}}" class="back-link">News And Offer</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">Create</a>
            </div>
        </div>
        <div class="insert">
            <form method="post" action="{{ route('newsoffer.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" class="form-control" id="Title" placeholder="Title" name="Title" />
                </div>
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea class="form-control" id="Content" placeholder="Content" name="Content"></textarea>
                </div>
                <div class="form-group">
                    <strong>Picture:</strong>
                    <input type="file" class="form-control" id="ImgURL" name="ImgURL" placeholder="No file choosen" />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a class="btn btn-warning" href="{{ route('newsoffer.index') }}">Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
