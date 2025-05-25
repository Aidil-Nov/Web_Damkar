<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('kontak.kontak');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'subjek' => 'required|string|max:150',
            'message' => 'required|string|max:150',
        ]);
        return redirect()->back()->with('success', 'Pesan Berhasil Di Kirim Ke Posko');
    }
}
