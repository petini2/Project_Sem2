@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{asset('Admin/css/Seat.css')}}">
<link rel="stylesheet" href="{{asset('Admin/css/Showtime.css')}}">
    <div class="container-fluid" >
        <div class="head">
            <div class="pull-left title">
                <span>All Show Time</span>
            </div> 
        </div>
        <div>
            <div class="insert">
                <h3 style="font-weight: 700; text-align: center; margin-bottom: 15px">Create a new show time</h3>
                <form method="post" action="{{route('showtime.store')}}" enctype="multipart/form-data" style="margin: 0;">
                    @csrf
                    <div class="form-group create-form-group">
                        <strong>Start Time</strong>
                        <input type="text" class="form-control" id="StartTime" value="00:00:00" name="StartTime" style="color: #d12d52"/>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a class="btn btn-warning" href="{{ route('showtime.index') }}">Back</a>
                    </div>
                </form>
            </div>
            <div class="grid">
                @foreach ($showtimes as $shtm)
                    <div class="listseat">
                        <a class="listmovie" href="{{route('showtime.edit',$shtm->id)}}">
                            <div class="cardSeat" style="height: 70px">
                                <h5 class="card-title text-center" style="margin-top: 5px">{{$shtm->StartTime}}</h5>
                            </div>
                        </a>
                        <form action="{{route('showtime.destroy', $shtm->id) }}" method="post" id="SeatAction">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" id="EditDelete">Delete</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div style=" margin-left: 10px; margin-rigth:10px;">        
                {!! $showtimes->links('pagination::bootstrap-4') !!}
            </div>    
        </div>
    </div>
@endsection