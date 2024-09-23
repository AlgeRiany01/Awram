<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdsController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DonorController;
use App\Http\Controllers\admin\PatientController;
use App\Http\Controllers\admin\HospitalController;
use App\Http\Controllers\admin\MedicineController;
use App\Http\Controllers\admin\PatientsPostsController;










Route::group(
    ['middleware' => ['auth:admin']],
    function () {
        Route::get('/admin', [HomeController::class, 'admin']);
        Route::resource('medicines', MedicineController::class);
        Route::resource('hospitals', HospitalController::class);
        Route::resource('admins', AdminController::class);
        Route::resource('patients', PatientController::class);
        Route::resource('Donors', DonorController::class);
        Route::resource('patientsPosts', PatientsPostsController::class);
        Route::resource('adminAds', AdsController::class);

        Route::get('adminRequestedMedicines', [MedicineController::class, 'getRequestedMedicines'])->name('RequestedMedicines');
        Route::put('adminAcceptMedicine/{id}', [MedicineController::class, 'acceptMedicine'])->name('AcceptMedicine');
        Route::delete('admindeleteMedicineBooking/{id}', [MedicineController::class, 'deleteMedicineBooking'])->name('deleteMedicineBooking');

        Route::get('adminAcceptedMedicine', [MedicineController::class, 'acceptedMedicine'])->name('acceptedMedicine');
    }

);
