@extends('layouts.admin')
@section('content')
    <link rel='stylesheet' href="{{ asset('Admin/css/Castlist.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>All Cast Role</span>
            </div>
            <div class="pull-right create">
                <a class="btn btn-danger btn-lg " href="{{ route('castlist.create') }}">New</a>
            </div>
        </div>
        <div class="list">
            <table class="table table-striped">
                <thead class="thead text-center  table-danger">
                    <th class="text-center" style="width: 10%">Movie</th>
                    <th class="text-center" style="width: 5%">Cast</th>
                    <th class="text-center" style="width: 5%">Role</th>
                    <th class="text-center" style="width: 20%">Action</th>
                </thead>
                <tbody>
                    @foreach ($castlists as $cl)
                        <tr class="table-light">
                            @foreach ($allMovie as $eachMovie)
                                @if ($cl->movie_id == $eachMovie->id)
                                    <td class="text-center">{{ $eachMovie->MovieName }}</td>
                                @endif
                            @endforeach
                            @foreach ($allCast as $eachCast)
                                @if ($cl->cast_id == $eachCast->id)
                                    <td class="text-center">{{ $eachCast->Name }}</td>
                                @endif
                            @endforeach
                            <td class="text-center">{{ $cl->Role }}</td>
                            <td class="text-center">
                                <form action="{{ route('castlist.destroy', $cl->id) }}" method="post">
                                    <a class="btn btn-info" href="{{ route('castlist.edit', $cl->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style=" margin: 10px;">
                {!! $castlists->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
