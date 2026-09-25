<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return redirect()->route('lapor-banjir.form');
});

Route::get('/lapor-banjir', [LaporBanjirController::class, 'form'])
    ->name('lapor-banjir.form');

Route::post('/lapor-banjir', [LaporBanjirController::class, 'store'])
    ->name('lapor-banjir.store');