<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
Route::get('/flights', [FlightController::class, 'index']);
Route::get('/airlines', [AirlineController::class, 'index']);

Route::get('/users/{user}', [UserController::class, 'show']);
Route::get('/flights/{flight}', [FlightController::class, 'show']);
Route::get('/airlines/{airline}', [AirlineController::class, 'show']);

Route::put('/users/{user}', [UserController::class, 'update']);
Route::put('/flights/{flight}', [FlightController::class, 'update']);
Route::put('/airlines/{airline}', [AirlineController::class, 'update']);

Route::post('/users', [UserController::class, 'store']);
Route::post('/flights', [FlightController::class, 'store']);
Route::post('/airlines', [AirlineController::class, 'store']);

Route::delete('/users/{user}', [UserController::class, 'destroy']);
Route::delete('/flights/{flight}', [FlightController::class, 'destroy']);
Route::delete('/airlines/{airline}', [AirlineController::class, 'destroy']);