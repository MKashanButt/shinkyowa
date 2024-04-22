<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;

// Main Stock Pages
Route::get('/', [VehicleController::class, 'limited'])->name('home');

// Stock Page Filter
Route::get('/get-models', [VehicleController::class, 'getModels'])->name('get-models');
Route::get('/get-fueltype', [VehicleController::class, 'getFueltype'])->name('get-fueltype');
Route::get('/get-years', [VehicleController::class, 'getYears'])->name('get-years');
Route::get('/remove-year', [VehicleController::class, 'yearRemove'])->name('remove-year');

Route::get('/stock', [VehicleController::class, 'index'])->name('stock');
Route::get('/vehicle-info/{sno}', [VehicleController::class, 'show'])->name('vehicle-info');

// Filter Methods
Route::get('/filter', [VehicleController::class, 'filter']);
Route::get('/make/{make}', [VehicleController::class, 'filterMake']);
Route::get('/type/{type}', [VehicleController::class, 'filterType']);

// Static Pages
Route::get('/services/shipping', [VehicleController::class, 'shipping'])->name('services.company-profile');
Route::get('/about-us/company-profile', [VehicleController::class, 'company_profile'])->name('about-us.company-profile');
Route::get('/about-us/why-choose-us', [VehicleController::class, 'why_choose_us'])->name('about-us.why-choose-us');
Route::get('/sales-and-bank-details', [VehicleController::class, 'sales_and_bank_details'])->name('sales-and-bank-details');


//Admin
Route::get('/admin', function () {
    return view('admin.index', ['title' => 'Login', 'stylesheet' => '/login.css']);
})->name('admin.index');
Route::post('/admin/login/', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin/dashboard/', [AdminController::class, 'index'])->name('admin.dashboard');
