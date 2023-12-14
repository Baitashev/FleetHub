<?php

namespace App\Http\Controllers;
use App\Models\Auto;
use App\Models\Pricing;
use Illuminate\Http\Request;
use App\Models\trip;
use App\Models\Driver;
class OrderController extends Controller
{
public function appointOrder(Request $request)
    {
        $drivers = Driver::all();
        $trips=Trip::all();
        $trip = new Trip();
        $trip->driver_id = $request->input('trips');
        $trip->save();


        return view('appoint_order_success', ['drivers' => $drivers, 'trips'=>$trips]);
    }
    public function create()
    {
        // Получаем список автомобилей из таблицы autos
        $autos = Auto::all();

        // Получаем список тарифов из таблицы pricing
        $pricing = Pricing::all();


        // Возвращаем представление с формой для создания заказа
        return view('orders.create', ['autos' => $autos, 'pricings' => $pricing]);

    }
    public function store(Request $request)
{
    $trip = new Trip();
    $trip->auto_id = $request->input('auto');

    $trip->start_location = $request->input('start_location');
    $trip->end_location = $request->input('end_location');
    $trip->start_time=$request->input('start_time');
    $trip->pricing_id = $request->input('pricing');

    $trip->save();
    $message = 'Заказ успешно создан';

    // Здесь можно добавить редирект или другую логику после сохранения данных

    return view('orders.messageBox', ['message' => $message]);

}

}
