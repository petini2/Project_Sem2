<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Movie;
use App\Models\Castlist;
use Illuminate\Http\Request;

class ACastlistController extends Controller
{
    public function index()
    {
        $castlists = Castlist::paginate(10);
        $allMovie = Movie::all();
        $allCast = Cast::all();
        return view('admin.castlist.index' , compact('castlists', 'allMovie','allCast'));
    }

    public function create()
    {
        $allMovie = Movie::all();
        $allCast = Cast::all();
        return view('admin.castlist.create' , [
            'allMovie'=>$allMovie, 'allCast'=>$allCast
        ]);
    }
    public function store(Request $request)
    {

        $castlist = new CastList;
        $input = $request ->all();
        $castlist->create($input);
        return redirect()->route('castlist.index');
    }    
    
    public function show($id)
    {
        $showCastlist = Castlist::find($id);
        $showMovie = Movie::find($showCastlist->movie_id);
        $showCast = Cast::find($showCastlist->cast_id);
        $showCastlist->MovieDetail = $showMovie;
        $showCastlist->CastDetail = $showCast;
        return view('admin.castlist.show' , [
            'showCastlist'=>$showCastlist
        ]);
    }
    public function edit($id)
    {
        $editCastlist = Castlist::find($id);
        $allMovie = Movie::all();
        $allCast = Cast::all();
        return view('admin.castlist.edit' , compact('editCastlist','allMovie','allCast'));
    }
    public function update(Request $request, Castlist $castlist)
    {
        $input = $request->all();
        $castlist->update($input);
        return redirect()->route('castlist.index');
    }


    public function destroy(Castlist $castlists)
    {
        $castlists->delete();
        return redirect()->route('castlist.index');
    }
}

