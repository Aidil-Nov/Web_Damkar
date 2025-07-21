<?php

// app/Http/Controllers/VisitorController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {
        // Retrieve the latest active news from the database
        $news = News::where('status', 1)->latest()->get(); // Get active news ordered by latest

        // Pass the news data to the view
        return view('home', compact('news'));
    }

    public function layanan()
    {
        return view('layanan');
    }

    public function lokasi()
    {
        return view('lokasi');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
