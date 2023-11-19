<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автомобили</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ваш логотип</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Водители</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Автомобили</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('vehicles') }}">База знаний</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Зарегистрированные водители</h1>
        <!-- Здесь можно разместить список зарегистрированных водителей -->
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
