<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', [VehicleController::class, 'limited']);
Route::get('/vehicle-info/{sno}', [VehicleController::class, 'show']);
Route::get('/stock', [VehicleController::class, 'index']);
