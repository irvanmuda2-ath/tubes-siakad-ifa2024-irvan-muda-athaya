<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KrsController;

Route::redirect('/', '/login');

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::resource('dosen', DosenController::class)
        ->middleware('role:admin');

    Route::resource('mahasiswa', MahasiswaController::class)
        ->middleware('role:admin');

    Route::resource('matakuliah', MataKuliahController::class)
        ->middleware('role:admin');

    Route::resource('jadwal', JadwalController::class);

    Route::resource('krs', KrsController::class);
});

require __DIR__.'/auth.php';