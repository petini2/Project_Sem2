<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ContactController extends Controller
{
    public function index()
    {
        return view('guest.contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Get admin user
        $adminUser = User::where('isAdmin', true)->first();

        // Send email to admin
        Mail::to($adminUser->email)->send(new ContactFormSubmitted($validatedData));

        // Return success message
        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
