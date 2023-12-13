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
        $drivers = Driver::all(); // Получение списка водителей, предположим, что есть модель Driver
        return view('drivers', ['drivers' => $drivers]); // Передача переменной $drivers в представление
    }

    // Добавляем метод для отображения страницы регистрации водителей
    public function showRegistrationPage()
    {
        $countries = [
            'Россия',
            'Украина',
            'Беларусь',
            'Казахстан',
            'Азербайджан',
            'Армения',
            'Грузия',
            'Молдова',
            'Таджикистан',
            'Туркменистан',
            'Узбекистан',
            'Кыргызстан'
            ];
        return view('driverReg',['countries' => $countries]); // Предполагается, что шаблон для страницы находится в resources/views/driversReg.blade.php
    }
    public function register(Request $request)
    {
        $driver = new Driver();
        $driver->full_name = $request->input('full_name');
        $driver->license_number = $request->input('license_number');
        $driver->birth_date = $request->input('birth_date');
        $driver->phone_number = $request->input('phone_number');
        $driver->issuing_country = $request->input('issuing_country');
        $driver->issue_date = $request->input('issue_date');
        $driver->expiration_date = $request->input('expiration_date');
        $driver->car_brand = $request->input('car_brand');
        $driver->license_plate = $request->input('license_plate');

        $driver->save();

        return redirect()->route('drivers');
    }
    public function showDriverCard($id)
{
    $driver = Driver::find($id);
    return view('driverCard', ['driver' => $driver]);
}


}
