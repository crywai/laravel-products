<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игровая периферия — Главная</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container">
            <a class="logo" href="{{ route('home') }}">GamePoint</a>
            <nav aria-label="Главное меню">
                <a href="{{ route('home') }}" aria-current="page">Главная</a>
                <a href="{{ route('array') }}">Массивы</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h1>Игровая периферия</h1>
        <section class="intro">
            <img src="{{ Vite::asset('resources/images/keyboard.jpg') }}"
                 alt="Механическая клавиатура с цветными клавишами">
            <h2>О сайте</h2>
            <p>На этом сайте собрана игровая периферия: клавиатуры, мыши, наушники и коврики.</p>
            <p>В каталоге можно посмотреть товары и их цены.</p>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} GamePoint</p>
            <p>Грибунова Виктория Евгеньевна</p>
        </div>
    </footer>
</body>
</html>
