<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class News extends Model
{
    protected $fillable = [
        'title',
        'content', 
        'author',
        'gambar',
        'status',
        'published_at'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'status' => 'boolean'
    ];

    // Accessor untuk URL gambar
    public function getImageUrlAttribute()
    {
        return $this->gambar 
            ? asset('storage/'.$this->gambar)
            : asset('images/default-news.jpg');
    }

    // Hapus file gambar saat model dihapus
    protected static function booted()
    {
        static::deleted(function ($news) {
            if ($news->gambar && Storage::disk('public')->exists($news->gambar)) {
                Storage::disk('public')->delete($news->gambar);
            }
        });
    }
}