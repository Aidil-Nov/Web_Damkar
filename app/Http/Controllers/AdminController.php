<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\ContactMessage;
use App\Models\VisitorStatistic;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function contactMessages()
    {
        $messages = ContactMessage::latest()->get();
        return view('admin.contact_messages', compact('messages'));
    }

    public function newsIndex()
    {
        $news = News::latest()->get();
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

    public function destroyBerita($id)
    {
        News::findOrFail($id)->delete();
        return redirect()->route('admin.news.index')->with('success', 'Berita dihapus');
    }
    public function destroyGaleri($id)
    {
        $galeri = Galeri::findOrFail($id);
        if ($galeri->gambar) {
            Storage::delete('public/' . $galeri->gambar);
        }
        $galeri->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Galeri dihapus');
    }

    public function galleryIndex()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function visitorIndex()
    {
        $visitors = VisitorStatistic::latest()->get();
        return view('admin.visitors.index', compact('visitors'));
    }


}