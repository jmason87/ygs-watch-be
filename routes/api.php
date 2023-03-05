<?php

use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SetController;
use App\Http\Controllers\TeamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(SeasonController::class)->group(function () {
    Route::get('/seasons', 'index');
    Route::get('/seasons/{uuid}', 'show');
    Route::post('/seasons', 'store');
    Route::put('/seasons/{uuid}', 'update');
    Route::delete('/seasons/{uuid}', 'destroy');
});

Route::controller(TeamController::class)->group(function () {
    Route::get('/teams', 'index');
    Route::get('/teams/{uuid}', 'show');
    Route::post('/teams', 'store');
    Route::put('/teams/{uuid}', 'update');
    Route::delete('/teams/{uuid}', 'destroy');
});
