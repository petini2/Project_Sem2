<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Offer;

class OffersController extends Controller
{
    public function index(){
        $offers = Offer::all();
        $picName = "";
        return view('user.offers', compact('offers','picName'));
    }
}