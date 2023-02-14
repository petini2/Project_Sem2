<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class GuestController extends Controller
{
    public function cataloge(){
        $movies = Movie::all();
        return view('guest.cataloge', compact('movies'));
    }
}
