<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;
use Illuminate\Support\Facades\File;

class OfferController extends Controller
{
    public function index()
    {
        $newsoffers = Offer::paginate(10);
        return view('admin.newsoffer.index', compact('newsoffers'));
    }

    public function create()
    {
        $view_data['page_title'] = 'Add Movie';
        return view('admin.newsoffer.create')->with($view_data);
    }
    public function store(Request $request)
    {
        $newsoffer = new Offer;
        $newsoffer->Title = $request->input('Title');
        $newsoffer->Content = $request->input('Content');
        if($request->hasfile('ImgURL')){
            $file = $request->file('ImgURL');
            $extension =  $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Admin/img/newsoffer/', $filename);
            $newsoffer->ImgURL = $filename;
        }
        $newsoffer->save();
        return redirect()->route('newsoffer.index'); 
    }
    public function show(Offer $newsoffer)
    {
        return view('admin.newsoffer.show', compact('newsoffer'));
    } 

    public function edit(Offer $newsoffer)
    {
        return view('admin.newsoffer.edit', compact('newsoffer'));
    }

    public function update(Request $request, Offer $newsoffer)
    {
        $newsoffer->Title = $request->input('Title');
        $newsoffer->Content = $request->input('Content');
        if ($request->hasfile('ImgURL')) {
            $destination = 'Admin/img/newsoffer/' . $newsoffer->ImgURL;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('ImgURL');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Admin/img/newsoffer/', $filename);
            $newsoffer->ImgURL = $filename;
        };
        $newsoffer->update();
        return redirect()->route('newsoffer.index')->with('Success', 'Movie updated successfully');
    }

    public function destroy(Offer $newsoffer)
    {
        $newsoffer->delete();
        return redirect()->route('newsoffer.index')->with('success', 'Movie deleted successfully');
    }
}
