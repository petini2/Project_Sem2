<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Show;
use App\Models\Movie;
use App\Models\Showtime;
use DB;
class BookingController extends Controller
{
    public function index(){
        $startDate = Carbon::now();
        $endDate = new Carbon('2023-02-19');
        $all_dates = array();
        while ($startDate->lte($endDate)){
          $all_dates[] = $startDate->toDateString();
        
          $startDate->addDay();
        }

        $movies = Movie::where('Status','Screening')->get();
        $showtime = Showtime::all();
        $show = Show::all();
        return view('user.booking', compact(['all_dates', 'movies','showtime','show']));


    }
    
}