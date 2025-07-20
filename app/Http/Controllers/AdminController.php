<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\News;
use App\Models\Gallery;
use App\Models\Visitor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function contactMessages()
    {
        $messages = ContactMessage::latest()->get(); // atau ->paginate(20)
        return view('admin.contact_messages', compact('messages'));
    }

    public function newsIndex()
    {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    public function galleryIndex()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function visitorIndex()
    {
        $visitors = Visitor::latest()->get();
        return view('admin.visitors.index', compact('visitors'));
    }
}