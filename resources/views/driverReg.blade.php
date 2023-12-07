<!DOCTYPE html>
<html>
<head>
    <title>Регистрация водителя</title>
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
        input[type="date"],
        input[type="tel"],
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
    <h1>Регистрация водителя</h1>

    <form action="/submit_driver" method="POST">
        <!-- CSRF-токен для защиты формы -->
        @csrf

        <div class="form-group">
            <label for="full_name">Полное имя:</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>

        <div class="form-group">
            <label for="birth_date">Дата рождения:</label>
            <input type="date" id="birth_date" name="birth_date" required>
        </div>

        <div class="form-group">
            <label for="phone_number">Номер телефона:</label>
            <input type="tel" id="phone_number" name="phone_number" required>
        </div>

        <div class="form-group">
            <label for="license_number">Номер лицензии:</label>
            <input type="text" id="license_number" name="license_number" required>
        </div>

        <div class="form-group">
            <label for="issuing_country">Страна выдачи</label>
            <select class="form-control" id="issuing_country" name="issuing_country">
                @foreach($countries as $country)
                    <option value="{{ $country }}">{{ $country }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="issue_date">Дата выдачи:</label>
            <input type="date" id="issue_date" name="issue_date" required>
        </div>

        <div class="form-group">
            <label for="expiration_date">Дата окончания:</label>
            <input type="date" id="expiration_date" name="expiration_date" required>
        </div>

        <div class="form-group">
            <label for="car_brand">Марка автомобиля:</label>
            <input type="text" id="car_brand" name="car_brand" required>
        </div>

        <div class="form-group">
            <label for="license_plate">Номер автомобиля:</label>
            <input type="text" id="license_plate" name="license_plate" required>
        </div>

        <input type="submit" value="Зарегистрировать водителя">
    </form>
</body>
</html>
