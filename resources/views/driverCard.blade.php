<!DOCTYPE html>
<html>
<head>
    <title>Информация о водителе</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items:right;
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        p {
            color: #555;
            margin-bottom: 8px;
        }

        .logo {
            margin-top: 10px;
        }

        .logo img {
            width: 100px; /* Adjust the width as needed */
            height: auto; /* Maintains aspect ratio */
        }
         .driver-photo {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .driver-photo img {
            width: 100%;
            height: auto;
        }
    </style>
    <div class="logo">
        <!-- Replace 'path_to_your_logo' with the actual path or URL of your logo -->
        <img src="{{ asset('img/image.jpeg') }}" alt="Логотип">
    </div>
</head>
<body>
    <h1>Информация о водителе</h1>
    <!-- Отображение фото водителя -->
    <div class="foto">
        <img src="{{ asset($driver->foto) }}" alt="Фотография водителя">
    </div>

    <p>Имя: {{ $driver->full_name }}</p>
    <p>Номер лицензии: {{ $driver->license_number }}</p>
    <p>Дата рождения: {{ $driver->birth_date }}</p>
    <p>Номер телефона: {{ $driver->phone_number }}</p>
    <p>Номер автомобиля: {{ $driver->license_plate }}</p>
    <p>Страна выдачи: {{ $driver->issuing_country }}</p>
    <p>Дата выдачи: {{ $driver->issue_date }}</p>
    <p>Дата окончания: {{ $driver->expiration_date }}</p>
    <p>Марка автомобиля: {{ $driver->car_brand }}</p>
    <p>Дата создания: {{ $driver->created_at }}</p>
    <p>Дата обновления: {{ $driver->updated_at }}</p>
</body>
</html>
