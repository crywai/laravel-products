<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Игровая периферия — Массивы</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container">
            <a class="logo" href="{{ route('home') }}">GamePoint</a>
            <nav aria-label="Главное меню">
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('array') }}" aria-current="page">Массивы</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <h1>Каталог игровой периферии</h1>
        <div class="products">
            @foreach ($array as $item)
                <div class="product">
                    <img src="{{ Vite::asset('resources/images/' . $item['path']) }}" alt="{{ $item['title'] }}">
                    <h2>{{ $item['title'] }}</h2>
                    <p>{{ $item['price'] }} руб.</p>
                </div>
            @endforeach
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} GamePoint</p>
            <p>Грибунова Виктория Евгеньевна</p>
        </div>
    </footer>
</body>
</html>
