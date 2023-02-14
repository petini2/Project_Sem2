<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();

        return view('user.movieshowing', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'language' => 'required',
    //         'genre' => 'required',
    //         'releaseDate' => 'required',
    //         'duration' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $input = $request->all();

    //     if ($image = $request->file('image')){
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['image'] = "$profileImage";
    //     }
    //     Movie::create($input);

    //     return view('admin.adminlayout');

    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('user.movieshowing', compact('movies'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     return view('admin.medit',compact('movies'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id, $movies)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'language' => 'required',
    //         'genre' => 'required',
    //         'releaseDate' => 'required',
    //         'duration' => 'required',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $input = $request->all();

    //     if ($image = $request->file('image')) {
    //         $destinationPath = 'image/';
    //         $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
    //         $image->move($destinationPath, $profileImage);
    //         $input['image'] = "$profileImage";
    //     }else{
    //         unset($input['image']);
    //     }

    //     $movies->update($input);

    //     return redirect()->route('admin.index')
    //                     ->with('success','updated successfully');
    // }


    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id, $movies)
    // {
    //     $movies->delete();

    //     return redirect()->route('admin.index')
    //                     ->with('success','deleted successfully');
    // }
}
