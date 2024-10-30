<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\MakananController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/makanan', [MakananController::class, 'index'])->name('makanan');
    Route::post('/makanan', [MakananController::class, 'store'])->name('makanan.store');
    Route::delete('/makanan/{makanan}', [MakananController::class, 'destroy'])->name('makanan.destroy');

    Route::get('/pengguna', [UserController::class, 'index'])->name('pengguna');
    Route::get('/pengguna/{pengguna}', [UserController::class, 'edit'])->name('pengguna.edit');
    Route::put('/pengguna/{pengguna}', [UserController::class, 'update'])->name('pengguna.update');
    Route::delete('/pengguna/{pengguna}', [UserController::class, 'destroy'])->name('pengguna.destroy');

    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi');
    Route::delete('/notifikasi/{notifikasi}', [NotifikasiController::class, 'destroy'])->name('notifikasi.destroy');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
