<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::where('type','gallery')->paginate(12);
        $galleries_sliders = Gallery::where('type','gallery-slider')->get();
        return view('galeri',compact('galleries','galleries_sliders'));
    }
}
