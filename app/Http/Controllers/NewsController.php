<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::where('status', 1)
            ->orderBy('created_at', 'desc')
            ->paginate(6); // Sesuaikan jumlah per page

        return view('berita', compact('news')); // Arahkan ke view berita.blade.php
    }

    public function show($id)
    {
        $newsItem = News::findOrFail($id);
        return view('berita.show', compact('newsItem'));
    }
}
