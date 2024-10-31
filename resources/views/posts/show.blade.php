<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>Имя Фамилия: {{ $post->author }} </br>
        Дата создания: {{ $post->created_at }}</p>

    <h2>добавить информацию к контакту {{ $post->author}}</h2>

    <form action="{{ route('contacts.store', $post) }}" method="POST">
        @csrf
        <textarea name="content" placeholder="введите номер" required></textarea>
        <button type="submit">Добавить информацию к контакту</button>
    </form>

    <ul>
        @foreach ($post->contacts as $contact)
            <li>{{ $contact->content }}</li>
        @endforeach
    </ul>

    <a href="{{ route('posts.index') }}">Вернутся назад</a>
</body>
</html>