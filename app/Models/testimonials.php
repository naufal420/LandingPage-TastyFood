<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class testimonials extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'rating',
        'image',
        'comment'
    ];

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($testimonials) {
            if ($testimonials->image) {
                Storage::disk('public')->delete($testimonials->image);
            }
        });
    }
}
