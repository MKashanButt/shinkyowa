<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use Filament\Forms\Get;

Route::controller(VehicleController::class)->group(function () {
    // Main Stock Pages
    Route::get('/', 'limited')->name('home');

    // Stock Page Filter
    Route::get('/get-models', 'getModels')->name('get-models');
    Route::get('/get-fueltype', 'getFueltype')->name('get-fueltype');
    Route::get('/get-years', 'getYears')->name('get-years');
    Route::get('/remove-year', 'yearRemove')->name('remove-year');

    Route::get('/stock', 'index')->name('stock');
    Route::get('/vehicle-info/{sno}', 'show')->name('vehicle-info');

    // Filter Methods
    Route::get('/filter', 'filter');
    Route::get('/make/{make}', 'filterMake');
    Route::get('/type/{type}', 'filterType');
    Route::get('/country/{country}', 'filterCountry');
    Route::get('/category/{category}', 'filterCategory');
    // Search
    Route::get('/stock-search', 'search')->name('filter.search');
    // Static Pages
    Route::get('/services/shipping', 'shipping')->name('services.company-profile');
    Route::get('/about-us/company-profile', 'company_profile')->name('about-us.company-profile');
    Route::get('/about-us/why-choose-us', 'why_choose_us')->name('about-us.why-choose-us');
    Route::get('/sales-and-bank-details', 'sales_and_bank_details')->name('sales-and-bank-details');
});
