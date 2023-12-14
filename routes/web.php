<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Driver;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AutoController; // Исправленный namespace
use App\Http\Controllers\AdressController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;

Route::get('/adress-page', [AdressController::class, 'showContacts'])->name('adress');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/drivers', function () {
    $drivers = Driver::get();
    return view('drivers', ['drivers' => $drivers]);
})->name('drivers');

Route::get('/autos', [AutoController::class, 'index'])->name('autos');
Route::get('/auto/register', [AutoController::class, 'create'])->name('auto.register');
Route::post('/auto/register', [AutoController::class, 'store'])->name('auto.register.submit');

Route::get('/drivers/{id}', [DriverController::class, 'showDriverCard'])->name('driver.show');

Route::get('/logins', function () {
    return view('logins');
})->name('logins');

Route::post('/logins', [LoginController::class, 'logins'])->name('logins.submit');

Route::get('/registers', function () {
    return view('registers');
})->name('registers');
Route::post('/registers', [RegisterController::class, 'registers'])->name('registers.submit');

Route::get('/appoint-order', [OrderController::class, 'appointOrder'])->name('appoint-order');
Route::get('/create-order', [OrderController::class, 'create'])->name('create-order');
Route::get('/appoint_order_success', function () {
    return view('appoint_order_success');
})->name('appoint_order_success');
Route::post('/appoint-order', [OrderController::class, 'appointOrder'])->name('appoint-order');

Route::post('/store-order', [OrderController::class, 'store'])->name('store-order');

Route::post('/submit_driver', [DriverController::class, 'submitDriver'])->name('submit-driver'); // Подразумевая, что это правильное имя метода

Route::get('/register/driver', [DriverController::class, 'showRegistrationPage'])->name('driver.register');
Route::post('/register/driver', [DriverController::class, 'register']); // Подразумевая, что это правильное имя метода

require __DIR__.'/auth.php';
