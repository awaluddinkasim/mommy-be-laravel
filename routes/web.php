<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
