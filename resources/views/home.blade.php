    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FleetHub: База знаний</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap">



    </head>
    <body>
        <style>
            .nav-item{
                font-size: 24px;
            }


            .services, .tools {
                width: 80%; /* Фиксированная ширина блока */
                margin-left: auto; /* Центрирование блока по горизонтали */
            }
            .services p, .tools p {
                text-align: justify; /* Выравнивание текста по ширине */
            }


            .logo img {
            max-width: 200px; /* Максимальная ширина логотипа */

        }
        body {
            font-family: 'Nunito', sans-serif; /* Применение шрифта к тексту */
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
         /* Добавленные стили для footer */
        .footer {
            background-color: black; /* Цвет фона футера - черный */
            color: white; /* Цвет текста внутри футера - белый */
            /* Другие стили футера */
        }
         /* Изменения для улучшения расположения */
        .main {
            padding-bottom: 50px; /* Добавлено заполнение снизу для лучшей видимости подвала */
        }

        .flex-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px; /* Добавлен отступ для лучшего интервала */
        }

        .services, .tools {
            margin-top: 40px; /* Добавлен интервал между секциями */
        }

        .services p, .tools p {
            margin-bottom: 20px; /* Добавлен интервал после абзацев */
        }

        .services .flex-container,
        .tools .flex-container {
            margin-top: 20px; /* Изменен отступ для кнопок */
        }

        /* Стили подвала */
        .footer {
            padding: 20px 0; /* Добавлено заполнение для лучшего интервала */
            color: white;
            text-align: center;
        }


        </style>

        <header class="header">
            <div class="container">
                <a href="/" class="logo">
                    <img src ="{{ asset('img/image.jpeg') }}" alt="Almurut Taxopark">
                </a>
                 <nav class="main-nav">
            <a href="/" class="nav-item">Главная</a>
            <a href="{{ route('drivers') }}" class="nav-item active">Водители</a>
            <a href="{{ route('autos') }}" class="nav-item active">Автомобили</a>
            @auth
<form method="POST" action="{{ route('logout') }}">
    @csrf <!-- CSRF-защита для безопасности -->
    <button class="btn btn-primary" type="submit">Выйти</button>
</form>
<p class="nav-item">Привет, {{ Auth::user()->name }}!</p>
@else
<a href="{{ route('logins') }}">Войти</a>
@endauth
        </nav>
        <!-- Кнопка "Назначить заказ" -->
    <div class="flex-container">
        <a href="{{ route('appoint-order') }}" class="btn btn-primary">Назначить заказ</a>
    </div>
    <div class="create-order">
            <h2>Создать заказ</h2>
            <p>Нажмите на кнопку ниже, чтобы создать новый заказ:</p>
            <div class="flex-container">
                <a href="{{ route('create-order') }}" class="btn btn-primary">Создать заказ</a>
            </div>
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
                 <!-- Блоки с текстом "Сервисы" и "Инструменты" -->
                <div class="services">
                    <div class="authorization-button">

                </div>
                    <h2>Сервисы</h2>
                    <p>Водитель такси</p>
                    <p>Хотите стать водителем такси? Это увлекательное путешествие в мир профессионального водителя и предпринимателя. В этом занятии есть множество возможностей для тех, кто ищет гибкий график, высокий доход и удовлетворение от предоставления качественных услуг.

    Подготовка и Лицензирование
    Первый шаг - получение правильной лицензии и сертификатов. Проверьте требования в вашем регионе. Обычно для работы водителем такси требуется водительское удостоверение соответствующей категории, чистая криминальная история, а также возможно прохождение специального курса обучения.<p>
                <div class="flex-container">
                    <a href="/" class="btn btn-primary">Стать водителем</a>
                </div>
            </div>
                <div class="tools">
                    <h2>Инструменты</h2>
                    <p>Какие тарифы подходят моему автомобилю</p>
                    <p>Понимание, какой тариф лучше всего подходит для вашего автомобиля, играет важную роль в вашем успехе в сфере такси. Различные тарифы предоставляют разные возможности и уровни доходности для водителей. Ниже представлены основные факторы, которые следует учитывать при выборе тарифа для вашего транспортного средства:

    Размер и Класс Вашего Автомобиля
    Учтите тип, размер и технические характеристики вашего автомобиля. Некоторые тарифы могут быть более выгодны для компактных автомобилей, тогда как другие могут предоставлять дополнительные бонусы для автомобилей большего класса.<p>
                <div class="flex-container">
                    <a href="/" class="btn btn-primary">Тарифы</a>
                </div>

            <!-- Раздел "Контакты" -->
            <div class="contacts">
                <h2>Контакты</h2>
                <p>Для связи с нами:</p>
                <p>Email:baisal2010@bk.ru</p>
                <p>Телефон: +996 708 42 60 23</p>
                <div class="flex-container">
                    <a href="/adress-page" class="btn btn-primary">НАШ АДРЕС</a>
                </div>
            </div>



        </main>

        <footer class="footer">

            <div class="container">
                <div class="copyright">
                    &copy; 2023 Fleethub Все правы защищены автором.
                </div>
                <div class="links">

                </div>
            </div>
        </footer>

    </body>
    </html>
