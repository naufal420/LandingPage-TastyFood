<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){
        $newsRandom = News::inRandomOrder()->first();
        $news = News::where('is_published',true)->latest()->paginate(8);
        return view('news.index',compact('news','newsRandom'));
    }

    public function show($slug){
        $news = News::where('slug', $slug)->firstOrFail();
        return view('news.show',compact('news'));
    }
}
