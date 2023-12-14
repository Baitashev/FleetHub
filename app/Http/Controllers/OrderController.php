<?php

namespace App\Http\Controllers;
use App\Models\Auto;
use App\Models\Pricing;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function appointOrder()
    {
        // Здесь можно добавить логику для назначения заказа
        
        // Например, перенаправление или выполнение нужных действий для назначения заказа
        
        return view('appoint_order_success'); // Это предполагает, что у вас есть представление для успешного назначения заказа
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
}
