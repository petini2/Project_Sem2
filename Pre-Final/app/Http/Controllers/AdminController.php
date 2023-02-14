<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;
use App\Models\Show;
use App\Models\User;
use App\Models\Offer;
use App\Models\Movie;
use App\Models\Showtime;
use Carbon\Carbon;

$date = Carbon::now()->toDateTimeString();
class AdminController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('isAdmin',0);
        $admins = User::where('isAdmin',1);
        $casts = Cast::all();
        $shows = Show::all();
        $showtimes = Showtime::all();
        $newsoffers = Offer::all();
        $movies = Movie::all();
         $countMovieScreening = Movie::where('Status','Screening')->count();
         $countMovieNot = Movie::where('Status','Not Screening')->count();
         $countMovieStop = Movie::where('Status','Stop Screening')->count();
        
        $date = Carbon::now()->toFormattedDateString();
        $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString(); 

    	return view('admin.index', compact('users','casts','showtimes','shows',
        'newsoffers','movies','countMovieScreening','countMovieNot',
        'countMovieStop','date','time','admins'));
    }

    public function edit(User $ad){
        return view('admin.edit', compact('ad'));
    }
    public function update(Request $request, User $ad)
    {
        $ad->name = $request->input('name');
        $ad->lastname = $request->input('lastname');
        $ad->email = $request->input('email');
        $ad->phonenum = $request->input('phonenum');
        $ad->update();
        return redirect()->route('ad.index')->with('Success', 'Movie updated successfully');
    }
}