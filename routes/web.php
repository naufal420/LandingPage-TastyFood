<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\testimonialsController;
use App\Models\testimonials;
use Filament\Facades\Filament;

Route::get('/', [homecontroller::class, 'index']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/galeri', [GalleryController::class, 'index']);
Route::get('/kontak', [ContactController::class, 'index']);
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
Route::get('/testimonials', [testimonialsController::class, 'index']);
Route::post('/testimonials', [testimonialsController::class, 'store'])->name('testimonials.store');
