<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function logins(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Пользователь успешно аутентифицирован
            return redirect()->route('home'); // Редирект на страницу home
        }

        // Если аутентификация не удалась, возвращаем обратно на страницу входа
        return redirect()->route('logins')->with('error', 'Неверные учетные данные. Пожалуйста, попробуйте снова.');
    }
}
