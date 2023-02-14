<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        $user_id = auth()->id();
        $suggestedMovies = DB::table('movies')
            ->whereNotExists(function ($query) use ($user_id) {
                $query->select(DB::raw(1))
                    ->from('interstedmovies')
                    ->whereRaw('interstedmovies.MovieID = movies.id')
                    ->whereRaw("interstedmovies.UserID = $user_id");
            })
            ->get();

        return view('user.interest', [
            'movies' => $movies,
            'suggestedMovies' => $suggestedMovies,
        ]);
    }

}
