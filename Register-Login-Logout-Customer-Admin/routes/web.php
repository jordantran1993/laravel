<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
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

Route::get('/', function () {
    return view('welcome');
});

// Customer Routes
Route::prefix('customer')->name('customer.')->group(function() {
    Route::get('login', [App\Http\Controllers\Auth\CustomerController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Auth\CustomerController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\Auth\CustomerController::class, 'logout'])->name('logout');

    Route::get('register', [App\Http\Controllers\Auth\CustomerController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [App\Http\Controllers\Auth\CustomerController::class, 'register']);
});


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('login', [App\Http\Controllers\Auth\AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Auth\AdminController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\Auth\AdminController::class, 'logout'])->name('logout');

    Route::get('register', [App\Http\Controllers\Auth\AdminController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [App\Http\Controllers\Auth\AdminController::class, 'register']);
});


Route::get('/customer/dashboard', function () {
    return view('customer.dashboard');
})->name('customer.dashboard')->middleware('auth:customer');

Route::get('/admin/dashboard', function () {
    return view('admin.user.dashboard');
})->name('admin.user.dashboard')->middleware('auth:admin');

