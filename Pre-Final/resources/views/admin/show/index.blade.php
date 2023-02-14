@extends('layouts.admin')
@section('content')
    <link rel='stylesheet' href="{{ asset('Admin/css/Show.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>All Show</span>
            </div>
            <div class="pull-right create">
                <a class="btn btn-primary btn-lg " href="{{ route('show.create') }}">New</a>
            </div>
        </div>
        <div class="list">
            <table class="table table-striped">
                <thead class="thead text-center  table-danger">
                    <th class="text-center" style="width: 10%">Movie</th>
                    <th class="text-center" style="width: 5%">Show time</th>
                    <th class="text-center" style="width: 5%">Screen No</th>
                    <th class="text-center" style="width: 20%">Action</th>
                </thead>
                <tbody>
                    @foreach ($shows as $shw)
                        <tr class="table-light">
                            @foreach ($allMovie as $eachMovie)
                                @if ($shw->MovieID == $eachMovie->id)
                                    <td class="text-center">{{ $eachMovie->MovieName }}</td>
                                @endif
                            @endforeach
                            @foreach ($allShowtime as $eachShowtime)
                                @if ($shw->ShowtimeID == $eachShowtime->id)
                                    <td class="text-center">{{ $eachShowtime->StartTime }}</td>
                                @endif
                            @endforeach
                            <td class="text-center">{{ $shw->ScreenNo }}</td>
                            <td class="text-center">
                                <form action="{{ route('show.destroy', $shw->id) }}" method="post">
                                    <a class="btn btn-info" href="{{ route('show.edit', $shw->id) }}">Edit</a>
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
                {!! $shows->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
