<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Offer;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\View;
use Session;
use App\Http\Requests;
use Doctrine\Inflector\Rules\Patterns;
use Illuminate\Support\Facades\Redirect;
session_start();


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('user.cataloge', compact('movies'));
    }

    public function guest()
    {
        $offers = Offer::all();
        $movies = Movie::all();
        return view('guest.layout', compact(['movies', 'offers']));
    }

    public function userindex()
    {
        $offers = Offer::all();
        $movies = Movie::all();
        return view('user.userindex', compact(['movies', 'offers']));
    }

    public function search(){
        $search_text = $_GET['query'];
        $movies = Movie::where('MovieName', 'LIKE', '%'.$search_text.'%')->get();
        return view('user.search', compact('movies'));
    }

    
}