<?php

namespace App\Http\Controllers;

use App\Models\InterestedMovie;
use Illuminate\Http\Request;
use App\Models\Movie;

class InterestController extends Controller
{
    public function store(Request $request, $id)
    {
        $interest = InterestedMovie::where([
            'movieid' => $id,
            'userid' => auth()->id(),
        ])->first();

        if ($interest) {
            $interest->delete();
            return redirect()->back()->with('success', 'You have removed interest in the movie');
        } else {
            $movie = Movie::find($id);
            $interest = InterestedMovie::create([
                'movieid' => $movie->id,
                'userid' => auth()->id(),
            ]);
            return redirect()->back()->with('success', 'You have shown interest in '.$movie->name.' movie');
        }
    }

    public function index()
    {
        $interests = InterestedMovie::where('userid', auth()->id())->get();
        $movies = [];
        foreach ($interests as $interest) {
            $movie = Movie::find($interest->movieid);
            if ($movie) {
                $movies[] = $movie;
            }
        }
        return view('user.interest', [
            'movies' => $movies,
        ]);
    }
}
