<!DOCTYPE html>
<html>
<head>
    <title>Список водителей</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 20px;
        }

        h1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
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
