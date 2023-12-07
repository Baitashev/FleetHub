<?php

namespace App\Http\Controllers;

use App\Models\Auto; // Правильный импорт модели Auto
use App\Models\Driver; // Импорт модели Driver
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
        $autos = Auto::all(); // Исправлено имя переменной и использование правильного имени модели

        return view('autos', ['autos' => $autos]);
    }

    public function create()
    {
        $drivers = Driver::all();
        return view('autosReg', ['drivers' => $drivers]);
    }

    public function store(Request $request)
    {
        $auto = new Auto();
        $auto->brand = $request->input('brand');
        $auto->model = $request->input('model');
        $auto->license_plate = $request->input('license_plate');
        $auto->color = $request->input('color');
        $auto->year = $request->input('year');
        $auto->driver_id = $request->input('driver_id');
        $auto->save();

        return redirect()->route('autos');
    }
}
