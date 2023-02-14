@extends('layouts.admin')
@section('content')
    <link rel='stylesheet' href="{{ asset('Admin/css/Offer.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>All News And Offer</span>
            </div>
            <div class="pull-right create">
                <a class="btn btn-primary btn-lg " href="{{ route('newsoffer.create') }}">New</a>
            </div>
        </div>
        <div class="grid">
            @foreach ($newsoffers as $no)
                <div class="listcast">
                    <a href="{{route('newsoffer.show',$no->id)}}">
                        <div class="d-flex flex-column">
                            <img src="{{ asset('Admin/img/newsoffer/' . $no->ImgURL) }}" alt="Image" id="CastPic">
                            <p id="Name">{{ $no->Title }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
