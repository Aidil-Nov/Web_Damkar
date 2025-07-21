<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    // Nama tabel jika berbeda dari default plural
    protected $table = 'gallery';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
    ];
}
