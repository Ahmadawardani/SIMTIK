<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\SuratController;
use App\Http\Controllers\Admin\KeuanganController;
use App\Http\Controllers\Admin\InformasiController;
use App\Http\Controllers\Admin\BeritaController;

// ===== PUBLIC ROUTES =====
Route::get('/', [PublicController::class, 'beranda'])->name('beranda');
Route::get('/profil', [PublicController::class, 'profil'])->name('profil');
Route::get('/layanan', [PublicController::class, 'layanan'])->name('layanan');
Route::get('/berita', [PublicController::class, 'berita'])->name('berita');
Route::get('/berita/{id}', [PublicController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/galeri', [PublicController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [PublicController::class, 'kontak'])->name('kontak');

// ===== AUTH ROUTES =====
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ===== ADMIN ROUTES (Protected) =====
Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('anggota', AnggotaController::class);
    Route::resource('surat', SuratController::class);
    Route::resource('keuangan', KeuanganController::class);
    Route::resource('informasi', InformasiController::class);
    Route::resource('berita', BeritaController::class);
});
