<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Galeri;
use App\Models\PesanKontak;
use App\Models\Pengunjung;
use Illuminate\Http\Request;

class AdminController extends Controller
{
public function dashboard()
{
    $totalBerita = Berita::count();
    $totalGaleri = Galeri::count();
    $totalPengunjung = Pengunjung::count();
    
    return view('admin.dashboard', compact('totalBerita', 'totalGaleri', 'totalPengunjung'));
}

// AdminController.php



    // Menampilkan Daftar Berita
// AdminController.php
public function newsIndex()
{
    $news = Berita::all();
    return view('admin.news.index', compact('news'));
}

    // Menampilkan Daftar Galeri
// AdminController.php
public function galleryIndex()
{
    $gallery = Galeri::all();
    return view('admin.gallery.index', compact('gallery'));
}


// AdminController.php
public function visitorIndex()
{
    $visitors = Pengunjung::all();
    return view('admin.visitors.index', compact('visitors'));
}

public function storeBerita(Request $request)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'konten' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
    ]);

    // Proses gambar jika ada
    if ($request->hasFile('gambar')) {
        $gambarPath = $request->file('gambar')->store('images', 'public');
    }

<<<<<<< HEAD
    // Menyimpan berita ke database
    Berita::create([
        'judul' => $request->judul,
        'konten' => $request->konten,
        'gambar' => $gambarPath ?? null, // Menggunakan gambar jika ada
    ]);

    return redirect()->route('admin.news.index')->with('success', 'Berita berhasil ditambahkan');
}

public function updateBerita(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'judul' => 'required|string|max:255',
        'konten' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $news = Berita::findOrFail($id);

    // Proses gambar jika ada
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama
        if ($news->gambar) {
            Storage::delete('public/' . $news->gambar);
        }
        $gambarPath = $request->file('gambar')->store('images', 'public');
        $news->gambar = $gambarPath;
=======
    public function contactMessages()
    {
        $messages = ContactMessage::latest()->get(); // atau ->paginate(20)
        return view('admin.contact_messages', compact('messages'));
>>>>>>> origin/aidil
    }

    // Update berita
    $news->update([
        'judul' => $request->judul,
        'konten' => $request->konten,
    ]);

    return redirect()->route('admin.news.index')->with('success', 'Berita berhasil diperbarui');
}

public function storeGaleri(Request $request)
{
    $request->validate([
        'judul' => 'required|string|max:255',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
    ]);

    $gambarPath = $request->file('gambar')->store('images', 'public');

    Galeri::create([
        'judul' => $request->judul,
        'gambar' => $gambarPath,
    ]);

    return redirect()->route('admin.gallery.index')->with('success', 'Galeri berhasil ditambahkan');
}


}