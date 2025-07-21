<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\VisitorController;

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// Visitor Routes
Route::get('/', [VisitorController::class, 'index'])->name('home'); // Home
Route::get('/layanan', [VisitorController::class, 'layanan'])->name('layanan'); // Layanan
Route::get('/lokasi', [VisitorController::class, 'lokasi'])->name('lokasi'); // Lokasi
Route::get('/galeri', [VisitorController::class, 'galeri'])->name('galeri'); // Galeri
Route::get('/galeri', [GalleryController::class, 'index'])->name('galeri');
Route::get('/kontak', [VisitorController::class, 'kontak'])->name('kontak'); // Kontak

// Route untuk halaman daftar berita (utama)
Route::get('/berita', [NewsController::class, 'index'])->name('berita'); // Nama route 'berita'

// Route untuk detail berita
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('berita.show');
// Contact Form Routes (for both displaying and submitting)
Route::get('/kontak', [ContactController::class, 'create'])->name('kontak'); // Show contact form
Route::post('/kontak', [ContactController::class, 'store'])->name('kontak.store'); // Handle form submission
use Illuminate\Support\Facades\Route;

// Admin Routes (with auth and admin middleware)
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin Dashboard
    Route::get('/admin/a', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Contact Messages (Admin Panel)
    Route::get('/admin/contact-messages', [AdminController::class, 'ContactMessages'])->name('admin.contact');

    // News Routes (Admin Panel)
    Route::get('/admin/news', [AdminController::class, 'newsIndex'])->name('admin.news.index');
    Route::get('/admin/news/create', [AdminController::class, 'createBerita'])->name('admin.news.create');
    Route::post('/admin/news', [AdminController::class, 'storeBerita'])->name('admin.news.store');
    Route::get('/admin/news/{id}/edit', [AdminController::class, 'editBerita'])->name('admin.news.edit');
    Route::put('/admin/news/{id}', [AdminController::class, 'updateBerita'])->name('admin.news.update');
    Route::delete('/admin/news/{id}', [AdminController::class, 'destroyBerita'])->name('admin.news.destroy');

    // Gallery Routes (Admin Panel)
    Route::get('/admin/gallery', [AdminController::class, 'galleryIndex'])->name('admin.gallery.index');
    Route::get('/admin/gallery/create', [AdminController::class, 'createGallery'])->name('admin.gallery.create');
    Route::post('/admin/gallery', [AdminController::class, 'storeGallery'])->name('admin.gallery.store');
    Route::delete('/admin/gallery/{id}', [AdminController::class, 'destroyGallery'])->name('admin.gallery.destroy');
    Route::get('/admin/gallery/{id}/edit', [AdminController::class, 'Galleryedit'])->name('admin.gallery.edit');
    Route::put('/admin/gallery/{id}', [AdminController::class, 'Galleryupdate'])->name('admin.gallery.update');
});

// Routes for Admin Dashboard (with admin middleware)
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware(['auth', 'admin']);
