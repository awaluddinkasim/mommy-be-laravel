<?php

use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MakananController;
use App\Http\Controllers\Admin\NotifikasiController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Http\Response;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/makanan', [MakananController::class, 'index'])->name('makanan');
    Route::post('/makanan', [MakananController::class, 'store'])->name('makanan.store');
    Route::delete('/makanan/{makanan}', [MakananController::class, 'destroy'])->name('makanan.destroy');

    Route::get('/pengguna', [UserController::class, 'index'])->name('pengguna');
    Route::get('/pengguna/{user}', [UserController::class, 'edit'])->name('pengguna.edit');
    Route::put('/pengguna/{user}', [UserController::class, 'update'])->name('pengguna.update');
    Route::delete('/pengguna/{user}', [UserController::class, 'destroy'])->name('pengguna.destroy');

    Route::get('/notifikasi', [NotifikasiController::class, 'index'])->name('notifikasi');
    Route::delete('/notifikasi/{notifikasi}', [NotifikasiController::class, 'destroy'])->name('notifikasi.destroy');

    Route::get('/akun', [AccountController::class, 'index'])->name('akun');
    Route::put('/akun', [AccountController::class, 'update'])->name('akun.update');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'resetPassword'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'updatePassword'])->name('password.update');
});

Route::get('/download', function () {
    return response()->download(public_path('files/mommybe v1.0.9.apk'), 'mommybe v1.0.9.apk');
})->name('download');
