<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\CastList;
use App\Models\Cast;
use DB;
use Illuminate\Support\Facades\View;
use Session;
use App\Http\Requests;
use Doctrine\Inflector\Rules\Patterns;
use Illuminate\Support\Facades\Redirect;
session_start();
use Illuminate\Http\Request;

class CastListsController extends Controller
{

    public function show($id){
        $movies = Movie::find($id);
        return view('user.detail', compact('movies'));

    }
    public function gshow($id){
        $movies = Movie::find($id);
        return view('guest.detail', compact('movies'));

    }



}
