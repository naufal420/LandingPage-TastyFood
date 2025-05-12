<?php

namespace App\Http\Controllers;

use App\Models\testimonials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class testimonialsController extends Controller
{
    public function index()
    {
        $testimonials = testimonials::all();
        return view('testimonials', compact('testimonials'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:10000',
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string',
        ]);
        try {
            $fileName = time() . '_' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('testimonials', $fileName, 'public');

            testimonials::create([
                'name' => $request->name,
                'email' => $request->email,
                'image' => $imagePath,
                'rating' => $request->rating,
                'comment' => $request->comment,
            ]);

            return redirect()->back()->with('success', 'Testimoni berhasil dikirim!');
        } catch (\Exception $e) {
            Log::error('Gagal menyimpan testimoni: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengirim testimoni. Silakan coba lagi.');
        }
    }
}
