<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller
{
    public function contact()
    {
        $user = User::find(auth()->user()->id);
        return view('user.contact-us', compact('user'));
    }
    public function gcontact()
    {
        return view('guest.gcontact-us');
    }

    public function sendEmail(Request $request){
        $user = User::find($request->UserID);
        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phonenum' => $request->phonenum,
            'msg' => $request->msg,
        ];

        Mail::to('khiemnguyen7905@gmail.com')->send(new ContactMail($details));
        return back()->with('message_send', 'Your message has been send');
    }
}
