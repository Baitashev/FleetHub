<!DOCTYPE html>
<html>
<head>
    <title>Список автомобилей</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 10px;
        }

        h1 {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-primary:focus {
            outline: none;
            box-shadow: none;
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
        Список автомобилей
        <a href="{{ route('auto.register') }}" class="btn btn-primary btn-sm">Зарегистрировать автомобиль</a>
    </h1>

    @if ($autos->isEmpty())
        <p>Нет доступных автомобилей.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Марка</th>
                    <th>Модель</th>
                    <th>Год выпуска</th>
                    <th>Цвет</th>
                    <th>Дата создания</th>
                    <th>Государственный регистрационный знак</th>
                    <th>Водитель</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($autos as $auto)
                    <tr>
                        <td>{{ $auto->brand }}</td>
                        <td>{{ $auto->model }}</td>
                        <td>{{ $auto->year }}</td>
                        <td>{{ $auto->color }}</td>
                        <td>{{ $auto->created_at }}</td>
                        <td>{{ $auto->license_plate }}</td>
                        <th>{{ $auto->driver_ID }}</th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
