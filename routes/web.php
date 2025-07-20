<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Hanya untuk admin yang sudah login
Route::middleware(['auth', 'admin'])->group(function () {
    // Semua rute ini hanya bisa diakses oleh admin yang sudah login
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Rute lainnya...
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);
});


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
})->name('kontak');

// Tampilkan halaman kontak
Route::get('/kontak', [ContactController::class, 'create'])->name('kontak');

// Simpan pesan kontak
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store');

// Untuk admin melihat pesan
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/contact-messages', [ContactMessageController::class, 'index'])->name('admin.contact');
});
