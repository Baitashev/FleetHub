<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DriverController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/drivers', [DriverController::class, 'index'])->name('drivers');


Route::get('/vehicles', function () {
    return view('vehicles');
})->name('vehicles');


Route::get('/', function () {
    return view('home');
});