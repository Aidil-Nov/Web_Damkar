<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    // Contact Messages
    Route::get('/admin/contact-messages', [AdminController::class, 'ContactMessages'])
        ->name('admin.contact');

    // News (Berita)
    Route::get('/admin/news', [AdminController::class, 'newsIndex'])
        ->name('admin.news.index');
    Route::get('/admin/news/create', [AdminController::class, 'createBerita'])
        ->name('admin.news.create');   // <-- yang belum ada
    Route::post('/admin/news', [AdminController::class, 'storeBerita'])
        ->name('admin.news.store');
    Route::get('/admin/news/{id}/edit', [AdminController::class, 'editBerita'])
        ->name('admin.news.edit');
    Route::patch('/admin/news/{id}', [AdminController::class, 'updateBerita'])
        ->name('admin.news.update');
    Route::delete('/admin/news/{id}', [AdminController::class, 'destroyBerita'])
        ->name('admin.news.destroy');

    // Gallery
    Route::get('/admin/gallery', [AdminController::class, 'galleryIndex'])
        ->name('admin.gallery.index');
    Route::get('/admin/gallery/create', [AdminController::class, 'createGallery'])
        ->name('admin.gallery.create');
    Route::post('/admin/gallery', [AdminController::class, 'storeGaleri'])
        ->name('admin.gallery.store');
    Route::delete('/admin/gallery/{id}', [AdminController::class, 'destroyGaleri'])
        ->name('admin.gallery.destroy');

    // Visitors
    Route::get('/admin/visitors', [AdminController::class, 'visitorIndex'])
        ->name('admin.visitors.index');
});






















Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->name('admin.dashboard')
    ->middleware(['auth', 'admin']);

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

