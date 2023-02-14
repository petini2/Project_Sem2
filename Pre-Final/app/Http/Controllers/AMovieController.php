<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AMovieController extends Controller
{
    public function index(){
        $movies = Movie::paginate(15);
        return view('admin.movie.index',compact('movies'));
    }  

    public function create(){
        $view_data['page_title'] = 'Add Movie';
        return view('admin.movie.create')->with($view_data);
    }

    public function store(Request $request){        
        $movie = new Movie;
        $movie->MovieName = $request->input('MovieName');
        $movie->Language = $request->input('Language');
        $movie->Genre = $request->input('Genre');
        $movie->Status = $request->input('Status');
        $movie->ReleaseDate = $request->input('ReleaseDate');
        $movie->Duration = $request->input('Duration');
        if($request->hasfile('ImgURL')){
            $file = $request->file('ImgURL');
            $extension =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Admin/img/movie/', $filename);
            $movie->ImgURL = $filename;
        }
        $movie->Trailer = $request->input('Trailer');
        $movie->Description = $request->input('Description');
        $movie->save();
        return redirect()->route('movie.index')->with('Success', 'Movie added successfully'); 
    }

     public function show(Movie $movie){
        return view('admin.movie.show', compact('movie'));
    }         
    public function edit(Movie $movie){
        return view('admin.movie.edit', compact('movie'));
    }
    public function update(Request $request, Movie $movie)
    {
        $movie->MovieName = $request->input('MovieName');
        $movie->Language = $request->input('Language');
        $movie->Genre = $request->input('Genre');
        $movie->Status = $request->input('Status');
        $movie->ReleaseDate = $request->input('ReleaseDate');
        $movie->Duration = $request->input('Duration');
        if ($request->hasfile('ImgURL')) {
            $destination = 'Admin/img/movie/' . $movie->ImgURL;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('ImgURL');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Admin/img/movie/', $filename);
            $movie->ImgURL = $filename;
        };
        $movie->Trailer = $request->input('Trailer');
        $movie->Description = $request->input('Description');
        $movie->update();
        return redirect()->route('movie.index')->with('Success', 'Movie updated successfully');
    }
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movie.index')->with('success', 'Movie deleted successfully');
    }
}
