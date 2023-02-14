@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('Admin/css/Cast.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Edit Cast</span>
            </div>
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('cast.index')}}" class="back-link">Cast</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href=""  class="back-link">{{$cast->Name}}</a>
            </div>
        </div>    
        <div class="edit">
            <form method="post" action="{{route('cast.update',$cast->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT') 
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" class="form-control" id="Name" value="{{$cast->Name}}" name="Name"/>
                </div>
                <div class="form-group">  
                    <strong>Gender</strong>              
                    <select name='Gender' id="Gender">
                        <option value="Male"  {{ $cast->Status == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female"  {{ $cast->Status == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                </div>
                <div class="form-group">
                    <strong>Day of birth</strong>
                    <input type="date" class="form-control" id="DOB" value="{{$cast->DOB}}" name="DOB" />
                </div>
                <div class="form-group">
                    <strong>Image</strong>
                    <div>
                        <div class=" pull-left">
                            <img src="{{asset('Admin/img/cast/'.$cast->Picture)}}" alt="Image" style="width:150px;"> 
                            <input type="file" class="form-control" id="Picture" name="Picture" style="margin-right: 150px; margin-top: 10px; width: 350px"/>
                        </div>                     
                        <div class="pull-right" style="margin-left: 350px; margin-top: -100px; position: absolute;">    
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a class="btn btn-warning" href="{{route('cast.index')}}">Back</a>                            
                        </div>                     
                    </div>
                </div>        
            </form>
        </div>
    </div>
@endsection