<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\patient\AdsController;
use App\Http\Controllers\patient\MedicineController;
use App\Http\Controllers\patient\PatientsPostsController;
use App\Http\Controllers\patient\PatientBookingController;
use App\Http\Controllers\patient\MedicineBookingController;




Route::group(
    ['middleware' => ['auth:patient']],
    function () {
        Route::resource('patientMedicines', MedicineController::class);
        Route::resource('patientBookings', PatientBookingController::class);
        Route::resource('patientMedicinesBooking', MedicineBookingController::class);
        Route::resource('patientPosts', PatientsPostsController::class);
        Route::resource('ads', AdsController::class);
        Route::get('/patient', [HomeController::class, 'patient']);
        Route::post('posts/store/{id}', [PatientsPostsController::class, 'store'])->name('posts.store');
        // Route::resource('admins', AdminController::class);
        // Route::resource('patients', PatientController::class);
        // Route::resource('Donors', DonorController::class);
        // Route::resource('patientsPosts', PatientsPostsController::class);
    }
);
