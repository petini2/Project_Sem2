<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ACastController extends Controller
{
    public function index()
    {
        $casts = Cast::paginate(10);
        return view('admin.cast.index', compact('casts'));
    }

    public function create()
    {
        $view_data['page_title'] = 'Add Cast';
        return view('admin.cast.create')->with($view_data);
    }
    public function store(Request $request, Cast $cast)
    {
        $cast->Name = $request->input('Name');
        $cast->Gender = $request->input('Gender');
        $cast->DOB = $request->input('DOB');
        if($request->hasfile('Picture')){
            $file = $request->file('Picture');
            $extension =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Admin/img/cast/', $filename);
            $cast->Picture = $filename;
        };
        $cast->save();
        return redirect()->route('cast.index')->with('Success', 'Cast added successfully'); 
    }
    public function show(Cast $cast)
    {
        return view('admin.cast.show', compact('cast'));
    }
    public function edit(Cast $cast)
    {
        return view('admin.cast.edit', compact('cast'));
    }

    
    public function update(Request $request, Cast $cast)
    {
        $cast->Name = $request->input('Name');
        $cast->Gender = $request->input('Gender');
        $cast->DOB = $request->input('DOB');
        if ($request->hasfile('Picture')) {
            $destination = 'Admin/img/cast/' . $cast->Picture;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('Picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Admin/img/cast/', $filename);
            $cast->Picture = $filename;
        };
        $cast->update();
        return redirect()->route('cast.index')->with('Success', 'Cast updated successfully'); 
    }

    public function destroy(Cast $cast)
    {
        $cast->delete();
        return redirect()->route('cast.index')->with('success', 'Cast deleted successfully');
    }
}