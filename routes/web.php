<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Driver;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AutoController; // Исправленный namespace

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/drivers', function () {
    $drivers = Driver::get();
    return view('drivers', ['drivers' => $drivers]);
})->name('drivers');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/autos', [AutoController::class, 'index'])->name('autos');
Route::get('/auto/register', [AutoController::class, 'create'])->name('auto.register');
Route::post('/auto/register', [AutoController::class, 'store'])->name('auto.register.submit');

Route::get('/register/driver', [DriverController::class, 'showRegistrationPage'])->name('driver.register');
Route::post('/submit_driver', [DriverController::class, 'register']);

require __DIR__.'/auth.php';
