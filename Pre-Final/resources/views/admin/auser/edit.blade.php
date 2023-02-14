@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('Admin/css/Show.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>Edit Account Role</span>
            </div>
            <div class="pull-right create">
                <a href="/ad" class="back-link">
                    Home <i class="fa-solid fa-house-chimney" style="color:#8b8ee7"></i>
                </a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{ route('auser.index') }}" class="back-link">Account</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="" class="back-link">Edit</a>
            </div>
        </div>
        <div class="insert">
            <form method="post" action="{{ route('auser.update', $auser->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" class="form-control" value="{{ $auser->name }}" readonly>
                </div>
                <div class="form-group">
                    <strong>Last name:</strong>
                    <input type="text" class="form-control" value="{{ $auser->lastname }}" readonly>
                </div>
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" class="form-control" value="{{ $auser->email }}" readonly>
                </div>
                <div class="form-group">
                    <strong>Phone Number:</strong>
                    <input type="text" class="form-control" value="{{ $auser->phonenum }}" readonly>
                </div>
                <div class="form-group">
                    <strong>Role</strong>
                    <select name='isAdmin' id="isAdmin">
                        <option value="0" {{ $auser->isAdmin == '0' ? 'selected' : '' }}>Admin</option>
                        <option value="1" {{ $auser->isAdmin == '1' ? 'selected' : '' }}>User</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <a class="btn btn-warning" href="{{ route('auser.index') }}">Back</a>

            </form>
        </div>
    </div>
@endsection
