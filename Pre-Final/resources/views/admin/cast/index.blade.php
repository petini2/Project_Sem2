@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('Admin/css/Cast.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>All Cast</span>
            </div>
            <div class="pull-right create">
                <a class="btn btn-primary btn-lg " href="{{ route('cast.create') }}">New</a>
            </div>
        </div>
        <div class="grid">
            @foreach ($casts as $c)
                <div class="listcast">
                    <div class="d-flex flex-column">
                        <img src="{{ asset('Admin/img/cast/' . $c->Picture) }}" alt="Image" id="CastPic">
                        <p id="Name"><strong>Name: </strong>&nbsp;{{ $c->Name }}</p>
                        <p><strong>Gender: </strong>&nbsp;{{ $c->Gender }}</p>
                        <p><strong>Day of birth: </strong>&nbsp;{{ $c->DOB }}</p>
                        <form action="{{ route('cast.destroy', $c->id) }}" method="post" id="CastAction">
                            <a class="btn btn-info" href="{{ route('cast.edit', $c->id) }}" id="EditCast">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="EditDelete">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div style=" margin-left: 10px;">
            {!! $casts->links('pagination::bootstrap-4') !!}
        </div>
    </div>
@endsection
