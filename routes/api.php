<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\BabyController;
use App\Http\Controllers\User\LaktasiController;
use App\Http\Controllers\User\MakananController;
use App\Http\Controllers\User\NutrisiHarianController;
use App\Http\Controllers\User\ObstetriController;
use App\Http\Controllers\User\StatusGiziController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/baby', [BabyController::class, 'get']);
    Route::post('/baby', [BabyController::class, 'store']);
    Route::delete('/baby', [BabyController::class, 'destroy']);

    Route::get('/makanan', [MakananController::class, 'get']);

    Route::get('/nutrisi-harian', [NutrisiHarianController::class, 'get']);
    Route::post('/nutrisi-harian', [NutrisiHarianController::class, 'store']);

    Route::get('/laktasi', [LaktasiController::class, 'get']);
    Route::post('/laktasi', [LaktasiController::class, 'store']);

    Route::get('/obstetri', [ObstetriController::class, 'get']);
    Route::post('/obstetri', [ObstetriController::class, 'store']);
    Route::delete('/obstetri', [ObstetriController::class, 'destroy']);

    Route::get('/status-gizi/{obstetri}', [StatusGiziController::class, 'get']);
    Route::post('/status-gizi/{obstetri}', [StatusGiziController::class, 'store']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
