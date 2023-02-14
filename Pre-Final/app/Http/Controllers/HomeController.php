<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Offer;
use Illuminate\Foundation\Auth\User;
use App\Models\Showtime;
use Carbon\Carbon;
use App\Models\Cast;
use App\Models\Show;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $offers = Offer::all();
        $movies = Movie::all();
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

        if (auth()->check() && auth()->user()->isAdmin == 0) {
                return view('admin.index', compact('users','casts','showtimes','shows',
                'newsoffers','movies','countMovieScreening','countMovieNot',
                'countMovieStop','date','time','admins'));
        }else{
        return view('user.userindex', compact(['movies','offers']));
    }
    }
}