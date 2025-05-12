<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'type',
        'timestamps',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($gallery) {
            $gallery->uploaded_at = now();
        });

        static::deleting(function ($gallery) {
            if ($gallery->image) {
                Storage::disk('public')->delete($gallery->image);
            }
        });
    }
}
