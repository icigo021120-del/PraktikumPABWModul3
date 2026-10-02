<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

// Redirect halaman utama ke form lapor banjir
Route::get('/', function () {
    return redirect()->route('lapor-banjir.form');
});

// Halaman Form Pelaporan
Route::get('/form', [LaporBanjirController::class, 'form'])
    ->name('lapor-banjir.form');
    
// Proses Kirim Data (POST)
Route::post('/process', [LaporBanjirController::class, 'store'])
    ->name('lapor-banjir.store');

// Halaman Konfirmasi (diakses setelah store / redirect)
Route::get('/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])
    ->name('lapor-banjir.konfirmasi');

// Halaman Daftar Laporan
Route::get('/laporan', [LaporBanjirController::class, 'index'])
    ->name('lapor-banjir.index');