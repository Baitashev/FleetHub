<!DOCTYPE html>
<html>
<head>
    <title>Список водителей</title>
    <link rel="stylesheet" href="https://fonts.bunny.net/css?family=Nunito">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <style>
        /* Variables */
        @import 'variables';

        /* Bootstrap */
        @import 'bootstrap/scss/bootstrap';
    </style>
</head>
<body>
    <h1>
        Список водителей
        <a href="#" class="btn btn-primary btn-lg">+</a>
    </h1>

    @if ($drivers->isEmpty())
        <p>Нет доступных водителей.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Номер лицензии</th>
                    <th>Дата рождения</th>
                    <th>Номер телефона</th>
                    <th>Номер автомобиля</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->license_number }}</td>
                        <td>{{ $driver->dateOfBirthday }}</td>
                        <td>{{ $driver->phone_number }}</td>
                        <td>{{ $driver->car_number }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
