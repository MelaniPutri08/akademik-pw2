<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\RombonganBelajarController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa/home', function () {
    return view('mahasiswa.home');
})->middleware(['auth', 'verified'])->name('mahasiswa.home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Dosen Routes
Route::prefix('dosen')->name('dosen.')->group(function () {
    Route::get('index', [DosenController::class, 'index'])->name('index');
    Route::get('{id}/view', [DosenController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [DosenController::class, 'create'])->name('create');
        Route::post('store', [DosenController::class, 'store'])->name('store');
        Route::get('{id}/edit', [DosenController::class, 'edit'])->name('edit');
        Route::delete('{id}', [DosenController::class, 'destroy'])->name('destroy');
    });
});



// Rombongan Belajar Routes
Route::prefix('rombongan_belajar')->name('rombongan_belajar.')->group(function () {
    Route::get('index', [RombonganBelajarController::class, 'index'])->name('index');
    Route::get('{id}/view', [RombonganBelajarController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [RombonganBelajarController::class, 'create'])->name('create');
        Route::post('store', [RombonganBelajarController::class, 'store'])->name('store');
        Route::get('{id}/edit', [RombonganBelajarController::class, 'edit'])->name('edit');
        Route::delete('{id}', [RombonganBelajarController::class, 'destroy'])->name('destroy');
    });
});

// Prodi Routes
Route::prefix('prodi')->name('prodi.')->group(function () {
    Route::get('index', [ProdiController::class, 'index'])->name('index');
    Route::get('{id}/view', [ProdiController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [ProdiController::class, 'create'])->name('create');
        Route::post('store', [ProdiController::class, 'store'])->name('store');
        Route::get('{id}/edit', [ProdiController::class, 'edit'])->name('edit');
        Route::delete('{id}', [ProdiController::class, 'destroy'])->name('destroy');
    });
});

// Mahasiswa Routes
Route::prefix('mahasiswa')->name('mahasiswa.')->group(function () {
    Route::get('index', [MahasiswaController::class, 'index'])->name('index');
    Route::get('home', [MahasiswaController::class, 'home'])->name('home');
    Route::get('{id}/view', [MahasiswaController::class, 'view'])->name('view');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('create', [MahasiswaController::class, 'create'])->name('create');
        Route::post('store', [MahasiswaController::class, 'store'])->name('store');
        Route::get('{id}/edit', [MahasiswaController::class, 'edit'])->name('edit');
        Route::delete('{id}', [MahasiswaController::class, 'destroy'])->name('destroy');
    });
});
