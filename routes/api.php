<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SetController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(PlayerController::class)->group(function () {
    Route::get('/players', 'index');
    Route::get('/players/{uuid}', 'show');
    Route::post('/players', 'store');
    Route::put('/players/{uuid}', 'update');
    Route::delete('/players/{uuid}', 'destroy');
});

Route::controller(SetController::class)->group(function () {
    Route::get('/sets', 'index');
    Route::get('/sets/{uuid}', 'show');
    Route::post('/sets', 'store');
    Route::put('/sets/{uuid}', 'update');
    Route::delete('/sets/{uuid}', 'destroy');
});