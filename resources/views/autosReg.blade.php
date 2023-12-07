<!DOCTYPE html>
<html>
<head>
    <title>Регистрация автомобиля</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="color"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Регистрация автомобиля</h1>

    <form action="{{ route('auto.register.submit') }}" method="POST">
        <!-- CSRF-токен для защиты формы -->
        @csrf

        <div class="form-group">
            <label for="brand">Марка:</label>
            <input type="text" id="brand" name="brand" required>
        </div>

        <div class="form-group">
            <label for="model">Модель:</label>
            <input type="text" id="model" name="model" required>
        </div>

        <div class="form-group">
            <label for="license_plate">Номер авто:</label>
            <input type="text" id="license_plate" name="license_plate" required>
        </div>

        <div class="form-group">
            <label for="color">Цвет:</label>
            <input type="color" id="color" name="color" required>
        </div>

        <div class="form-group">
            <label for="year">Год выпуска:</label>
            <input type="number" id="year" name="year" required>
        </div>

        <div class="form-group">
            <label for="driver_id">Водитель:</label>
            <select id="driver_id" name="driver_id" required>
                <option value="">Выберите водителя</option>
                @foreach($drivers as $driver)
                    <option value="{{ $driver->id }}">{{ $driver->full_name }}</option>
                @endforeach
            </select>
        </div>

        <input type="submit" value="Зарегистрировать автомобиль">
    </form>
</body>
</html>
