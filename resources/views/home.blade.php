<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetHub: База знаний1</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>
<body>

    <style>
        .nav-item{
            font-size: 24px;
        }
        body {
                background-image: url('C:\OSPanel\domains\fleethub\resources\views\logo.png'); /* Замените на путь к вашему изображению */
                background-size: cover; /* Растянуть изображение на весь экран */
                background-position: center; /* Центрировать изображение */

            }
    </style>

    <header class="header">
        <div class="container">
            <a href="/" class="logo">
                <img src="logo.png" alt="Fleethub">
            </a>
            <nav class="main-nav">
                <a href="/" class="nav-item">Главная</a>
                <a href="drivers" class="nav-item active">Водители</a>
                <a href="auto" class="nav-item">Автомобили</a>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="container">
            <div class="page-title">
                <h1>База знаний</h1>
            </div>

            <div class="articles-list">
                <ul class="articles-list__items">
                    <li class="articles-list__item">
                        <a href="/ky-ru/bishkek/knowledge-base/how-to-become-a-driver" class="nav-item">Как стать водителем?</a>
                    </li>
                    <li class="articles-list__item">
                        <a href="/ky-ru/bishkek/knowledge-base/how-to-use-the-app" class="nav-item">Как пользоваться приложением</a>
                    </li>
                    <li class="articles-list__item" class="nav-item">
                        <a href="/ky-ru/bishkek/knowledge-base/faq" class="nav-item">Вопросы и ответы</a>
                    </li>
                </ul>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="copyright">
                &copy; 2023 Fleethub
            </div>
            <div class="links">

            </div>
        </div>
    </footer>

</body>
</html>
