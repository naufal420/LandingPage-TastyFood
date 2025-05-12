<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'is_published',
        'published_at',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_published' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });

        static::saving(function ($news) {
            if ($news->is_published && empty($news->published_at)) {
                $news->published_at = now();
            }

            if (!$news->is_published) {
                $news->published_at = null;
            }
        });

        static::deleting(function ($news) {
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
        });
    }
}
