<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showtime;

class AShowtimeController extends Controller
{
    public function index()
    {
        $showtimes = Showtime::paginate(30);
        return view('admin.showtime.index', compact('showtimes'));
    }

    public function create()
    {
        $view_data['page_title'] = 'Add Showtime';
        return view('admin.showtime.create')->with($view_data);
    }
    public function store(Request $request)
    {
        $showtime = new Showtime;
        $showtime->StartTime = $request->input('StartTime');
        $showtime->save();
        return redirect()->route('showtime.index')->with('Success', 'Show time added successfully'); 
    }
    public function show(Showtime $showtime)
    {
        return view('admin.showtime.show', compact('showtime'));
    }

    public function edit(Showtime $showtime)
    {
        return view('admin.showtime.edit', compact('showtime'));
    }

    public function update(Request $request, Showtime $showtime)
    {
        $showtime->StartTime = $request->input('StartTime');
        $showtime->update();
        return redirect()->route('showtime.index')->with('Success', 'Show time updated successfully');
    }

    public function destroy(Showtime $showtime)
    {
        $showtime->delete();
        return redirect()->route('showtime.index')->with('success', 'Show time deleted successfully');
    }
}