@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Offer.css')}}">
    <div class="container-fluid">        
        <div class="head">
            <div class="pull-left title">
            </div> 
            <div class="pull-right create">                
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{route('newsoffer.index')}}" class="back-link">News & Offers</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a style="font-weight: 700;" class="back-link">{{$newsoffer->Title}}</a>
            </div>
        </div>
        <div id="MovieDetail">
            <div style="height: 500px;">
                <div>
                    <img src="{{asset('Admin/img/newsoffer/'.$newsoffer->ImgURL)}}" alt="Image" id="OfferPic">
                </div>
                <div class="MovieInfo">
                    <div>
                        <p><strong>Title:  </strong>&nbsp;{{$newsoffer->Title}}</p>
                        <p><strong>Content:  </strong>&nbsp;{{$newsoffer->Content}}</p>
                    </div>
                </div>
            </div>   
            <form action="{{route('newsoffer.destroy',$newsoffer->id)}}" method="post" id="Action">
                <a class="btn btn-info" href="{{route('newsoffer.edit', $newsoffer->id)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
@endsection