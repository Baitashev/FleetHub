    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FleetHub: База знаний</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    </head>
            <body>

        <style>
            .nav-item{
                font-size: 24px;
            }
            body {
                    background-image: url('C:\OSPanel\domains\fleethub\resources\views\logo.png');
                    background-size: cover;
                    background-position: center;

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
        </style>

        <header class="header">
            <div class="container">
                <a href="/" class="logo">
                    <img src ="{{ asset('img/image.jpeg') }}" alt="Almurut Taxopark">
                </a>
                <nav class="main-nav">
                    <a href="/" class="nav-item">Главная</a>
                    <a href="{{route('drivers') }}" class="nav-item active">Водители</a>
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
                 <!-- Блоки с текстом "Сервисы" и "Инструменты" -->
                <div class="services">
                    <h2>Сервисы</h2>
                    <p>Водитель такси</p>
                    <p>Хотите стать водителем такси? Это увлекательное путешествие в мир профессионального водителя и предпринимателя. В этом занятии есть множество возможностей для тех, кто ищет гибкий график, высокий доход и удовлетворение от предоставления качественных услуг.

    Подготовка и Лицензирование
    Первый шаг - получение правильной лицензии и сертификатов. Проверьте требования в вашем регионе. Обычно для работы водителем такси требуется водительское удостоверение соответствующей категории, чистая криминальная история, а также возможно прохождение специального курса обучения.<p>
         <a href="/" class="btn btn-primary">Стать водителем</a>
                </div>

                </div>

                <div class="tools">
                    <h2>Инструменты</h2>
                    <p>Какие тарифы подходят моему автомобилю</p>
                    <p>Понимание, какой тариф лучше всего подходит для вашего автомобиля, играет важную роль в вашем успехе в сфере такси. Различные тарифы предоставляют разные возможности и уровни доходности для водителей. Ниже представлены основные факторы, которые следует учитывать при выборе тарифа для вашего транспортного средства:

    Размер и Класс Вашего Автомобиля
    Учтите тип, размер и технические характеристики вашего автомобиля. Некоторые тарифы могут быть более выгодны для компактных автомобилей, тогда как другие могут предоставлять дополнительные бонусы для автомобилей большего класса.<p>
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
