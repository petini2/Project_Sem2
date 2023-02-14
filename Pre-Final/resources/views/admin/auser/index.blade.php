@extends('layouts.admin')
@section('content')
    <link rel='stylesheet' href="{{ asset('Admin/css/Castlist.css') }}">
    <div class="container-fluid">
        <div class="head">
            <div class="pull-left title">
                <span>All User</span>
            </div>
        </div>
        <div class="list">
            <table class="table table-striped">
                <thead class="thead text-center  table-danger">
                    <th style="width: 10%">Firstname</th>
                    <th style="width: 10%">Lastname</th>
                    <th style="width: 20%">Email</th>
                    <th style="width: 15%">Phone</th>
                    <th style="width: 5%">Note</th>
                    <th style="width: 20%">Action</th>
                </thead>
                <tbody>
                    @foreach ($ausers as $u)
                        <tr>
                            <td class="text-center table-light">{{ $u->name }}</td>
                            <td class="text-center table-light">{{ $u->lastname }}</td>
                            <td class="table-light">{{ $u->email }}</td>
                            <td class="text-center table-light">{{ $u->phonenum }}</td>
                            <td class="text-center table-light">
                                @if ($u->isAdmin == 0)
                                    <span
                                        style="padding: 7px; border-radius: 5px; background-color:#f63b63; color:rgb(255, 255, 255)">
                                        Admin
                                    </span>
                                @else
                                    <span
                                        style="padding:7px; border-radius: 5px;  background-color:#f97020; color:rgb(255, 255, 255)">
                                        User
                                    </span>
                                @endif
                            </td>
                            @if ($u->isAdmin == 1)
                                <td class="text-center table-light">
                                    <form action="{{ route('auser.destroy', $u->id) }}" method="post">
                                        <a class="btn btn-info" href="{{ route('auser.edit', $u->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            @else
                                <td class="text-center table-light">
                                    <form action="{{ route('auser.destroy', $u->id) }}" method="post">
                                        <a class="btn btn-info" href="{{ route('auser.edit', $u->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style=" margin: 10px;">
                {!! $ausers->links('pagination::bootstrap-4') !!}
            </div>
        </div>
    </div>
@endsection
