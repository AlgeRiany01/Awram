<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\patient\AdsController;
use App\Http\Controllers\donor\med_donationController;
use App\Http\Controllers\donor\donatedMedicationsController;



Route::group(
    ['middleware' => ['auth:donor']],
    function () {
        Route::resource('donor', med_donationController::class);
        Route::resource('donatedMedications', donatedMedicationsController::class);
        Route::resource('donorAds', AdsController::class);
    }
);
