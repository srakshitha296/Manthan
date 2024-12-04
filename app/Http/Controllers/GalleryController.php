<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $gallery = Gallery::all();
        return view("gallery.index", compact("gallery"));
    }

    public function show($id){
        $gallery = Gallery::find($id);
        // dd($gallery->gallery_images);
        return view('gallery.show', compact('gallery'));
    }
}
