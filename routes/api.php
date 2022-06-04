<?php

use App\Http\Controllers\Api\Auth\Get\GetAuthController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Spot\Get\GetSpotController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', LoginController::class);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', LogoutController::class);

    Route::prefix('get/')->group(function () {
        Route::get('auth', GetAuthController::class);
        Route::get('spots', GetSpotController::class);
    });
});
