    <!DOCTYPE html>
    <html>
    <head>
        <title>Список водителей</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
            .custom-btn {
        padding: 5px 10px; /* Уменьшение внутренних отступов */
        font-size: 14px; /* Уменьшение размера текста */
        border-radius: 3px; /* Уменьшение радиуса границ */
        }
        </style>
    </head>
    <body>
       <h1>
        Список водителей
        <a href="{{ route('driver.register') }}" class="btn btn-primary" style="padding: 10px 20px; font-size: 16px;">Зарегистрировать водителя</a>
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
                    <th>Страна выдачи</th>
                    <th>Дата выдачи</th>
                    <th>Дата окончания</th>
                    <th>Марка автомобиля</th>
                    <th>Номер автомобиля</th>
                    <th>Дата создания</th>
                    <th>Дата обновления</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->full_name }}</td>
                        <td>{{ $driver->license_number }}</td>
                        <td>{{ $driver->birth_date }}</td>
                        <td>{{ $driver->phone_number }}</td>
                        <td>{{ $driver->license_plate }}</td>
                        <td>{{ $driver->issuing_country }}</td>
                        <td>{{ $driver->issue_date }}</td>
                        <td>{{ $driver->expiration_date }}</td>
                        <td>{{ $driver->car_brand }}</td>
                        <td>{{ $driver->license_plate }}</td>
                        <td>{{ $driver->created_at }}</td>
                        <td>{{ $driver->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    </body>
    </html>
