<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Gallery;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function index()
    {

        // Menghitung total pengguna
        $totalUsers = User::count();

        // Menghitung total berita atau data lainnya
        $totalData = News::count();

        $totalGallery = Gallery::count();
        // Mengirim data ke view
        return view('admin.dashboard', compact('totalUsers', 'totalData', 'totalGallery'));
    }

    public function contactMessages()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.contact_messages', compact('messages'));
    }

    public function newsIndex()
    {
        $news = News::latest()->paginate(10);
        return view('admin.news.index', compact('news'));
    }

    public function createBerita()
    {
        return view('admin.news.create');
    }

    
    public function editBerita($id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
    }
    
    public function storeBerita(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'author' => 'nullable|string|max:100'
    ]);

    // Simpan gambar
    $gambarPath = $request->file('gambar')->store('news', 'public');

    // Simpan ke database
    News::create([
        'title' => $validated['title'],
        'content' => $validated['content'],
        'author' => $validated['author'],
        'gambar' => $gambarPath,
        'status' => true,
        'published_at' => now()
    ]);

    return redirect()->route('admin.news.index')
        ->with('success', 'Berita berhasil ditambahkan');
}

public function updateBerita(Request $request, $id)
{
    $news = News::findOrFail($id);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'author' => 'nullable|string|max:100'
    ]);

    // Handle gambar
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($news->gambar) {
            Storage::disk('public')->delete($news->gambar);
        }
        $validated['gambar'] = $request->file('gambar')->store('news', 'public');
    }

    $news->update($validated);

    return redirect()->route('admin.news.index')
        ->with('success', 'Berita berhasil diperbarui');
}

    public function destroyBerita($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return back()->with('success', 'Berita berhasil dihapus');
    }


    // Gallery  

    public function galleryIndex()
    {
        $gallery = Gallery::latest()->get();
        return view('admin.gallery.index', compact('gallery'));
    }
    public function createGallery()
    {
        return view('admin.gallery.create');
    }

    public function destroyGallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->gambar) {
            Storage::delete('public/' . $gallery->gambar);
        }
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Galeri dihapus');
    }
    public function storeGallery(Request $request)
    {
        // Validasi data input
        $data = $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Simpan file ke storage/app/public/gallery
        $path = $request->file('gambar')->store('gallery', 'public');

        // Simpan ke database
        Gallery::create([
            'judul' => $data['judul'] ?? null,
            'gambar' => $path, // contoh: gallery/foto123.png
            'deskripsi' => $data['deskripsi'] ?? null,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri berhasil ditambahkan.');
    }


    public function Galleryedit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function Galleryupdate(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        // Validasi data input
        $data = $request->validate([
            'judul' => 'nullable|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        // Jika ada gambar baru di-upload, simpan
        if ($request->hasFile('gambar')) {
            // Simpan gambar baru
            $data['gambar'] = $request->file('gambar')->store('gallery', 'public');
        }

        // Update data ke database
        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Galeri berhasil diperbarui.');
    }

}