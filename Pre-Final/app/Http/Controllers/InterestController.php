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
            'MovieID' => $id,
            'UserID' => auth()->id(),
        ])->first();

        if ($interest) {
            $interest->delete();
            return redirect()->back()->with('success', 'You have removed interest in the movie');
        } else {
            $movie = Movie::find($id);
            $interest = InterestedMovie::create([
                'MovieID' => $movie->id,
                'UserID' => auth()->id(),
            ]);
            return redirect()->back()->with('success', 'You have shown interest in '.$movie->name.' movie');
        }
    }

    public function index()
    {
        $interests = InterestedMovie::where('UserID', auth()->id())->get();
        $movies = [];
        foreach ($interests as $interest) {
            $movie = Movie::find($interest->MovieID);
            if ($movie) {
                $movies[] = $movie;
            }
        }
        return view('user.interest', [
            'movies' => $movies,
        ]);
    }
}
