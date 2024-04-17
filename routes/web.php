<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

Route::get('/', [VehicleController::class, 'home']);
Route::get('/get-models', [VehicleController::class, 'getModels']);

Route::get('/vehicle-info/{sno}', [VehicleController::class, 'show']);
Route::get('/stock', [VehicleController::class, 'stock']);

// Filter Methods
Route::get('/filter', [VehicleController::class, 'filter']);
Route::get('/make/{make}', [VehicleController::class, 'filterMake']);
Route::get('/type/{type}', [VehicleController::class, 'filterType']);

Route::get('/sales-and-bank-details', [VehicleController::class, 'sales_and_bank_details']);
