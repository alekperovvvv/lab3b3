<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Телефонная книга</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Добро пожайловать в телефонную книгу!</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('posts.index') }}">Главная страница</a></li>
                    <li><a href="{{ route('posts.create') }}">Добавить контакт</a></li>
                </ul>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>