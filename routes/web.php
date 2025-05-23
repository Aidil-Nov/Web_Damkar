<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/home', function () {
    return view('Home');
})->name('Home');

Route::get('/kontak', function () {
    return view('Kontak');
})->name('Kontak');

Route::get('/lokasi', function () {
    return view('Lokasi');
})->name('Lokasi');

Route::get('/layanan', function () {
    return view('Layanan');
})->name('Layanan');

Route::get('/galeri', function () {
    return view('galeri');
})->name('Galeri');

