<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;

Route::get('/', function () {
    return view('home');
})->name('Home');

Route::get('/layanan', function () {
    return view('layanan');
})->name('Layanan');

Route::get('/berita', function () {
    return view('berita');
})->name('Berita');

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


// Untuk pengguna mengirim pesan
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// Untuk admin melihat pesan
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/contact-messages', [ContactMessageController::class, 'index'])->name('admin.contact');
});
