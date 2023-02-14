<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Show;
use App\Models\Movie;
use App\Models\Showtime;


class AShowController extends Controller
{
    public function index()
    {
        $shows = Show::paginate(10);
        $allMovie = Movie::all();
        $allShowtime = Showtime::all();
        return view('admin.show.index' , compact('shows', 'allMovie','allShowtime'));
    }

    public function create()
    {
        $allMovie = Movie::where('Status', 'Screening')->get();
        $allShowtime = Showtime::all();
        return view('admin.show.create' , [
            'allMovie'=>$allMovie, 'allShowtime'=>$allShowtime
        ]);
    }
    public function store(Request $request)
    {

        $show = new Show;
        $input = $request ->all();
        $show->create($input);
        return redirect()->route('show.index');
    }    
    
    public function show($id)
    {
        // $showShow = AShow::find($id);
        // $showMovie = AMovie::find($showShow->MovieID);
        // $showShowtime = AShowtime::find($showShow->CastID);
        // $showShow->MovieDetail = $showMovie;
        // $showShow->showShowtime = $showShowtime;
        // return view('admin.show.show' , [
        //     'showShow'=>$showShow
        // ]);
    }
    public function edit($id)
    {
        $editShow =Show::find($id);
        $allMovie = Movie::where('Status', 'Screening')->get();
        $allShowtime = Showtime::all();
        return view('admin.show.edit' , compact('editShow','allMovie','allShowtime','id'));
    }
    public function update(Request $request, Show $show)
    {
        $input = $request ->all();
        $show->update($input);
        return redirect()->route('show.index');
    }


    public function destroy($id)
    {
        $delShow = Show::find($id);
        $delShow->delete();
        return redirect()->route('show.index');
    }
}
