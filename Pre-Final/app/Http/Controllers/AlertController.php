<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlertController extends Controller
{
    public function store(Request $request)
{
   alert()->info('Please login first');
   return redirect()->back();
}

}
