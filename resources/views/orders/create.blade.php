<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание заказа</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select,
        input[type="datetime-local"],
        button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Создание нового заказа</h1>
        <div id="map" style="height: 300px;"></div>

        <!-- iframe для карты Google Maps -->
        <!--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.7735700889277!2d74.58859881562918!3d42.87462140639204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388aa4255967f4df%3A0x9166031b6619b2bb!2sBishkek%2C%20Kyrgyzstan!5e0!3m2!1sen!2sus!4v1640801833487!5m2!1sen!2sus"
            width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
 -->

        <!-- Форма создания заказа -->
        <form action="{{ route('store-order') }}" method="POST">
            @csrf

            <label for="start_point">Начальная точка</label>
            <input type="text" id="start_location" name="start_location">

            <label for="end_point">Конечная точка</label>
            <input type="text" id="end_location" name="end_location">

            <label for="auto">Автомобиль</label>
            <select id="auto" name="auto">
                @foreach ($autos as $auto)
                <option value="{{ $auto->id }}">{{ $auto->brand }}</option>
                @endforeach
            </select>

            <label for="trip_time">Время начала поездки</label>
            <input type="datetime-local" id="start_time" name="start_time">

            <label for="pricing">Тариф</label>
            <select id="pricing" name="pricing">
                @foreach ($pricings as $pricing)
                <option value="{{ $pricing->id }}">{{ $pricing->tariff }}</option>
                @endforeach
            </select>

            <button type="submit">Создать заказ</button>
        </form>
        <div id="notification" style="display: none;">Заказ успешно создан</div>
    </div>
    <script>
        function initMap() {
            const directionsService = new google.maps.DirectionsService();
            const directionsRenderer = new google.maps.DirectionsRenderer();
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 42.8746, lng: 74.5698 },
                zoom: 14,
            });
            directionsRenderer.setMap(map);

            const startLocation = document.getElementById("start_location");
            const endLocation = document.getElementById("end_location");

            const onChangeHandler = function () {
                calculateAndDisplayRoute(
                    directionsService,
                    directionsRenderer,
                    startLocation.value,
                    endLocation.value
                );
            };

            startLocation.addEventListener("change", onChangeHandler);
            endLocation.addEventListener("change", onChangeHandler);
        }

        function calculateAndDisplayRoute(
            directionsService,
            directionsRenderer,
            start,
            end
        ) {
            directionsService.route(
                {
                    origin: start,
                    destination: end,
                    travelMode: google.maps.TravelMode.DRIVING,
                },
                (response, status) => {
                    if (status === "OK") {
                        directionsRenderer.setDirections(response);
                    } else {
                        window.alert("Directions request failed due to " + status);
                    }
                }
            );
        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXwhmjHqyGy5qz5nXq10KURlhhaBODaN4&callback=initMap&libraries=places"
        async
        defer

    >
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, errorHandler);
            } else {
                console.log("Геолокация не поддерживается вашим браузером");
            }
        }

        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            console.log("Широта: " + latitude + "°, Долгота: " + longitude + "°");
            // Здесь вы можете использовать полученные координаты для дальнейших действий
        }

        function errorHandler(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    console.log("Пользователь отклонил запрос на геолокацию");
                    break;
                case error.POSITION_UNAVAILABLE:
                    console.log("Информация о местоположении недоступна");
                    break;
                case error.TIMEOUT:
                    console.log("Время запроса на геолокацию истекло");
                    break;
                case error.UNKNOWN_ERROR:
                    console.log("Произошла неизвестная ошибка");
                    break;
            }
        }

        // Вызов функции для получения местоположения пользователя
        getLocation();
    </script>
</body>

</html>
