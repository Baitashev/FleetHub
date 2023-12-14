<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetHub: Контакты</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Nunito', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .logo img {
            max-width: 150px;
        }

        nav {
            margin-top: 20px;
        }

        .nav-item {
            font-size: 24px;
            padding: 10px 20px; /* Увеличенный размер кнопок */
        }

        .main {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .map-container {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
        }

        .contacts {
            text-align: center;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        footer .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer .copyright {
            margin-right: auto;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="/" class="logo">
                <img src="{{ asset('img/image.jpeg') }}" alt="Almurut Taxopark">
            </a>
            <nav>
                <a href="/home" class="nav-item">Главная</a>
                <a href="{{ route('drivers') }}" class="nav-item">Водители</a>
                <a href="{{ route('autos') }}" class="nav-item">Автомобили</a>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="page-title">
                <h1>Контакты</h1>
            </div>

            <div class="map-container" id="map"></div>

            <div class="contacts">
                <h2>Контакты</h2>
                <p>Email: baisal2010@bk.ru</p>
                <p>Телефон: +996 708 42 60 23</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="copyright">
                &copy; 2023 Fleethub Все права защищены автором.
            </div>
        </div>
    </footer>

    <!-- Используем скрипт 2ГИС для встраивания карты -->
    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
    <script>
        // Функция для инициализации карты
        function initMap() {
            // Инициализация карты с нужными параметрами
            DG.then(function () {
                var map = DG.map('map', {
                    center: [42.866684, 74.617245], // Координаты центра карты
                    zoom: 15 // Масштаб карты
                });

                // Добавление метки на карту
                DG.marker([42.866684, 74.617245]).addTo(map).bindPopup('Almurut Taxopark'); // Метка с информацией
            });
        }

        // Вызов функции инициализации карты после загрузки страницы
        document.addEventListener('DOMContentLoaded', initMap);
    </script>
</body>
</html>
