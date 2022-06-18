<?php

use App\Http\Controllers\Api\Auth\Get\GetAuthController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Spot\Get\GetSpotsByUserIdController;
use App\Http\Controllers\Api\Spot\SpotController;
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
Route::resource('spots', SpotController::class)->only(['index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', LogoutController::class);

    Route::resource('spots', SpotController::class)->only(['store', 'update', 'destroy']);

    Route::prefix('get/')->group(function () {
        Route::get('auth', GetAuthController::class);

        Route::prefix('spots/')->group(function () {
            Route::get('by_user_id', GetSpotsByUserIdController::class);
        });
    });
});
