<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/layanan', function () {
    return view('layanan');
})->name('Layanan');

Route::get('/lokasi', function () {
    return view('lokasi');
})->name('Lokasi');

Route::get('/galeri', function () {
    return view('galeri');
})->name('Galeri');

Route::get('/kontak', function () {
    return view('kontak');
})->name('Kontak');

Route::get('/kontak/create', [ContactController::class, 'create'])->name('kontak.create');
Route::post('/kontak/store', [ContactController::class, 'store'])->name('kontak.store');


