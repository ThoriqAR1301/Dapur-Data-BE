<?php

use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\CertificationController;

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/portofolio', [PortfolioController::class, 'index']);
    Route::post('/portofolio', [PortfolioController::class, 'store']);

    Route::get('/sertifikasi', [CertificationController::class, 'index']);
    Route::post('/sertifikasi', [CertificationController::class, 'store']);

});