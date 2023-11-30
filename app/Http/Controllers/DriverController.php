<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Driver;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers', ['drivers'=>$drivers]);
    }
    // Пример контроллера
    public function showDrivers()
    {
        $drivers = Driver::all(); // Получение списка водителей, предположим, что есть  модель Driver
        return view('drivers', ['drivers' => $drivers]); // Передача переменной $drivers в представление
    }

}