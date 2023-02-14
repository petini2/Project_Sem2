@extends('layouts.admin')
@section('content')
    <link rel="stylesheet" href="{{ asset('Admin/css/Admin.css') }}">
     <div id="Greet">
        <h3 class="pull-left">Dashboard</h3>
        <div class="pull-right">
            {{ $date }} <br>
            {{ $time }}
        </div>
    </div>
    <div class="Graph">
        <div class="pull-left">
            <div id="MovieInfo">
                <p class="text-center"><strong><i class="fa-solid fa-clapperboard" style="color: #ff5860"></i>
                        Movies:</strong>&nbsp;&nbsp;{{ $movies->count() }}</p>
                <div id="piechart">
                </div>
            </div>
        </div>
        <div class="pull-right">
            <div class="Total" style="margin-top: 50px;">
                <i class="fa-solid fa-users fa-3x"></i>
                <span>{{ $users->count() }}</span>
                <strong>Users</strong>
            </div>
            <div class="Total" style="margin-top: 50px; margin-left: 200px">
                <i class="fa-solid fa-users fa-3x"></i>
                <span>{{ $users->count() }}</span>
                <strong>Users</strong>
            </div>
            <div class="Total" style="margin-top: 50px; margin-left: 400px">
                <i class="fa-solid fa-couch fa-3x"></i>
                <span>{{ $newsoffers->count() }}</span>
                <strong>News/Offers</strong>
            </div>
            <div class="Total" style="margin-top: 220px;">
                <i class="fa-solid fa-masks-theater fa-3x"></i>
                <span>{{ $casts->count() }}</span>
                <strong>Casts</strong>
            </div>
            <div class="Total" style="margin-top: 220px;margin-left: 200px">
                <i class="fa-regular fa-hourglass-half fa-3x"></i>
                <span>{{ $showtimes->count() }}</span>
                <strong>Show time</strong>
            </div>
            <div class="Total" style="margin-top: 220px; margin-left: 400px">
                <i class="fa-solid fa-video fa-3x"></i>
                <span>{{ $shows->count() }}</span>
                <strong>Shows</strong>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Status', 'Number of movie'],
                ['Screening', {{ $countMovieScreening }}],
                ['Not Screening', {{ $countMovieNot }}],
                ['Stop Screening', {{ $countMovieStop }}]
            ]);

            var options = {
                // title: 'Movie Status'
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
@endsection
