<?php

use App\Http\Controllers\Api\Auth\Get\GetAuthController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Spot\Get\GetSpotByUserIdController;
use App\Http\Controllers\Api\Spot\SpotController;
use App\Http\Controllers\Api\User\Find\FindUserController;
use App\Http\Controllers\Api\User\UserController;
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

Route::prefix('find/')->group(function () {
    Route::prefix('users/')->group(function () {
        Route::get('/', FindUserController::class);
    });
});

Route::prefix('get/')->group(function () {
    Route::prefix('spots/')->group(function () {
        Route::get('by_user_id', GetSpotByUserIdController::class);
    });
});

Route::resource('spots', SpotController::class)->only(['index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', LogoutController::class);

    Route::resource('users', UserController::class)->only(['update']);
    Route::resource('spots', SpotController::class)->only(['store', 'update', 'destroy']);

    Route::prefix('get/')->group(function () {
        Route::get('auth', GetAuthController::class);
    });
});
