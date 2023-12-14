<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заказа</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <style>
        /* Здесь стили */
        .nav-item {
            font-size: 24px;
        }

        .services,
        .tools {
            width: 80%;
            margin-left: auto;
        }

        .services p,
        .tools p {
            text-align: justify;
        }

        .logo img {
            max-width: 200px;
        }

        body {
            font-family: 'Nunito', sans-serif;
        }

        .btn-primary {
            width: fit-content;
        }

        .flex-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .footer {
            background-color: black;
            color: white;
        }

        .main {
            padding-bottom: 50px;
        }

        .flex-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .services,
        .tools {
            margin-top: 40px;
        }

        .services p,
        .tools p {
            margin-bottom: 20px;
        }

        .services .flex-container,
        .tools .flex-container {
            margin-top: 20px;
        }

        .footer {
            padding: 20px 0;
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Создание нового заказа</h1>


    <form action="{{ route('store-order') }}" method="POST">
        @csrf

        <label for="start_point">Начальная точка</label>
        <input type="text" id="start_point" name="start_point">

        <label for="end_point">Конечная точка</label>
        <input type="text" id="end_point" name="end_point">

        <label for="auto">Автомобиль</label>
<select id="auto" name="auto">
    @foreach ($autos as $auto)
        <option value="{{ $auto->ID }}">{{ $auto->brand }}</option>
    @endforeach
</select>

        <label for="trip_time">Время начала поездки</label>
        <input type="datetime-local" id="trip_time" name="trip_time">

        <label for="pricing">Тариф</label>
<select id="pricing" name="pricing">
    @foreach ($pricings as $pricing)
        <option value="{{ $pricing->id }}">{{ $pricing->tariff }}</option>
    @endforeach
</select>

        <button type="submit">Создать заказ</button>
    </form>
</body>

</html>
