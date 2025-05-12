<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\News;
use App\Models\testimonials;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public static function index()
    {
        $galleries = Gallery::limit(6)->get();
        $newsLatestOne = News::latest()->first();
        $newsLatest = News::where('id', '!=', optional($newsLatestOne)->id)
            ->latest()
            ->limit(4)
            ->get();
            $testimonials = testimonials::all();
        return view('home', compact('galleries', 'newsLatestOne', 'newsLatest','testimonials'));
    }
}
