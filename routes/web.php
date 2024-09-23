<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\postsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes(['register' => false,]);


Route::get('/', [HomeController::class, 'home']);

Route::get('posts', [postsController::class, 'index']);

Route::get('logout', function () {
    if (Auth::guard('patient')->check()) {
        Auth::guard('patient')->logout();
    }
    if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
    }
    if (Auth::guard('donor')->check()) {
        Auth::guard('donor')->logout();
    }
    return back();
});
