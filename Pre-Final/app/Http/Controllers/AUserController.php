<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AUserController extends Controller
{
    public function index(){
        $ausers = User::paginate(5);
        return view('admin.auser.index',compact('ausers'));
    }
    public function edit(User $auser)
    {
        return view('admin.auser.edit', compact('auser'));
    }

    public function update(Request $request, User $auser)
    {
        $auser->isAdmin = $request->input('isAdmin');
        $auser->update();
        return redirect()->route('auser.index')->with('Success', 'Movie updated successfully');
    }

    public function destroy(User $auser){
        $auser->delete();
        return redirect()->route('auser.index');
    }
}
