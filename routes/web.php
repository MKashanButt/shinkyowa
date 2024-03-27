<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', [VehicleController::class, 'limited']);
Route::get('/vehicle-info/{sno}', [VehicleController::class, 'show']);
Route::get('/stock', [VehicleController::class, 'index']);

// Filter Methods
Route::get('/filter', [VehicleController::class, 'filter']);
Route::get('/make/{make}', [VehicleController::class, 'filterMake']);
Route::get('/type/{type}', [VehicleController::class, 'filterType']);
