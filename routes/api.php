<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\BabyController;
use App\Http\Controllers\User\LaktasiController;
use App\Http\Controllers\User\MakananController;
use App\Http\Controllers\User\NutrisiHarianController;
use App\Http\Controllers\User\ObsteriController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/makanan', [MakananController::class, 'get']);

    Route::get('/baby', [BabyController::class, 'get']);
    Route::post('/baby', [BabyController::class, 'store']);
    Route::delete('/baby', [BabyController::class, 'destroy']);

    Route::get('/laktasi', [LaktasiController::class, 'get']);
    Route::post('/laktasi', [LaktasiController::class, 'store']);

    Route::get('/obsteri', [ObsteriController::class, 'get']);
    Route::post('/obsteri', [ObsteriController::class, 'store']);
    Route::delete('/obsteri', [ObsteriController::class, 'destroy']);

    Route::get('/nutrisi-harian', [NutrisiHarianController::class, 'get']);
    Route::post('/nutrisi-harian', [NutrisiHarianController::class, 'store']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
