<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    public function store(Request $request)
{
   alert('Warning', 'Please login first');
   return redirect()->back();
}

}
