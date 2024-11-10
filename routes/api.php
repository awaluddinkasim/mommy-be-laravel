<?php

use App\Http\Controllers\PasswordResetController;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\BabyController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\LaktasiController;
use App\Http\Controllers\User\MakananController;
use App\Http\Controllers\User\ObstetriController;
use App\Http\Controllers\User\StatusGiziController;
use App\Http\Controllers\User\BabyEkskresiController;
use App\Http\Controllers\User\PPDScreeningController;
use App\Http\Controllers\User\NutrisiHarianController;
use App\Http\Controllers\User\BabyPertumbuhanController;
use App\Http\Controllers\User\BabyMonitorTidurController;

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [UserController::class, 'register']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user', function (Request $request) {
        return response()->json([
            'user' => new UserResource($request->user()),
        ]);
    });

    Route::get('/baby', [BabyController::class, 'get']);
    Route::post('/baby', [BabyController::class, 'store']);
    Route::delete('/baby/{baby}', [BabyController::class, 'destroy']);

    Route::group(['prefix' => 'baby/{baby}'], function () {
        Route::get('/monitor-tidur', [BabyMonitorTidurController::class, 'get']);
        Route::post('/monitor-tidur', [BabyMonitorTidurController::class, 'store']);
        Route::delete('/monitor-tidur/{monitor_tidur}', [BabyMonitorTidurController::class, 'destroy']);

        Route::get('/ekskresi', [BabyEkskresiController::class, 'get']);
        Route::post('/ekskresi', [BabyEkskresiController::class, 'store']);
        Route::delete('/ekskresi/{ekskresi}', [BabyEkskresiController::class, 'destroy']);

        Route::get('/pertumbuhan', [BabyPertumbuhanController::class, 'get']);
        Route::post('/pertumbuhan', [BabyPertumbuhanController::class, 'store']);
        Route::delete('/pertumbuhan/{pertumbuhan}', [BabyPertumbuhanController::class, 'destroy']);
    });

    Route::get('/makanan', [MakananController::class, 'get']);

    Route::get('/nutrisi-harian', [NutrisiHarianController::class, 'get']);
    Route::post('/nutrisi-harian', [NutrisiHarianController::class, 'store']);

    Route::get('/laktasi/{baby}', [LaktasiController::class, 'get']);
    Route::post('/laktasi', [LaktasiController::class, 'store']);
    Route::get('/laktasi/{baby}/charts', [LaktasiController::class, 'charts']);

    Route::get('/obstetri', [ObstetriController::class, 'get']);
    Route::post('/obstetri', [ObstetriController::class, 'store']);
    Route::delete('/obstetri/{obstetri}', [ObstetriController::class, 'destroy']);

    Route::get('/status-gizi/{obstetri}', [StatusGiziController::class, 'get']);
    Route::post('/status-gizi/{obstetri}', [StatusGiziController::class, 'store']);
    Route::put('/status-gizi/{status_gizi}', [StatusGiziController::class, 'update']);

    Route::get('/screening-ppd', [PPDScreeningController::class, 'get']);
    Route::post('/screening-ppd', [PPDScreeningController::class, 'store']);

    Route::put('/user', [UserController::class, 'update']);

    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::post('/forgot-password', [PasswordResetController::class, 'forgotPassword']);
