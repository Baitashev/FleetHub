<!-- appoint_orders.blade.php -->

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Назначение заказов</title>
    <!-- Здесь могут быть ваши стили или ссылки на стили -->
</head>
<body>
    <h1>Назначение заказов</h1>

    <form action="{{ route('appoint-order') }}" method="POST">
        @csrf

        <!-- Поля для выбора водителя и заказа -->
        <label for="driver">Выберите водителя:</label>
        <select id="driver" name="driver">
            @foreach ($drivers as $drivers)
                <option value="{{ $drivers->ID }}">{{ $drivers->full_name }}</option>
                @endforeach
            <!-- Здесь должен быть код для вывода списка водителей -->
        </select>

        <label for="trip">Выберите заказ:</label>
        <select id="trip" name="trip">
            @foreach ($trips as $trips)
                <option value="{{ $trips->id }}">{{ $trips->start_location }}</option>
                @endforeach
            <!-- Здесь должен быть код для вывода списка заказов -->
        </select>

        <button type="submit">Назначить</button>
    </form>

    <!-- Здесь может быть всплывающее уведомление об успешном назначении заказа -->
</body>
</html>
