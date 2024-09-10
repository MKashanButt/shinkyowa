<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use Stevebauman\Location\Facades\Location;

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

    Route::post('/send-email', 'sendEmail');

    Route::get('/test', function () {
        // return view('emails.inquiry', [
        //     'data' => [
        //         'destination' => 'Jamaica',
        //         'full_name' => 'M.Kashan Butt',
        //         'email_address' => 'kashan@gmail.com',
        //         'phone_no' => '+92 123 456 7890',
        //         'country' => 'Jamaica',
        //         'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id facilis commodi excepturi voluptate incidunt. Odio doloribus ullam doloremque, veniam possimus est animi provident cum, sequi totam ipsum nostrum tenetur magni molestiae magnam!',
        //     ]
        // ]);

        $location = Location::get(request()->ip());

        // Check if location was retrieved, otherwise return a default location or handle error
        if ($location === false) {
            // Default to a specific location (e.g., New York)
            $latitude = '40.7128';
            $longitude = '-74.0060';
            $city = 'Default City';
            $country = 'Default Country';
        } else {
            $latitude = $location->latitude; // Accessing properties from the Position object
            $longitude = $location->longitude;
            $city = $location->cityName;
            $country = $location->countryName;
        }

        return view('map', compact('latitude', 'longitude', 'city', 'country'));
    });
});
