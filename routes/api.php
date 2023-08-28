<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\LocationController;

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


Route::get('/characters', [CharacterController::class, 'index']);
Route::post('/characters', [CharacterController::class, 'store']);
Route::put('/characters/{id}', [CharacterController::class, 'update']);
Route::delete('/characters/{id}', [CharacterController::class, 'destroy']);

Route::get('/episodes', [EpisodeController::class, 'index']);
Route::post('/episodes', [EpisodeController::class, 'store']);
Route::put('/episodes/{id}', [EpisodeController::class, 'update']);
Route::delete('/episodes/{id}', [EpisodeController::class, 'destroy']);

Route::get('/locations', [LocationController::class, 'index']);
Route::post('/locations', [LocationController::class, 'store']);
Route::put('/locations/{id}', [LocationController::class, 'update']);
Route::delete('/locations/{id}', [LocationController::class, 'destroy']);

