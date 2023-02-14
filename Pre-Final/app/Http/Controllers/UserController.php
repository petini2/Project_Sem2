<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function edit(User $user){
        $this->$user = User::all();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $input = $request->all();
        $user->update($input);
        return redirect('/home');
    }

}
