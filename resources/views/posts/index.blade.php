@extends('layouts.app')

@section('content')
    <h2>Телефонная книга</h2>

    @foreach($posts as $post)
        <div class="post">
            <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
            <p><strong>Имя Фамилия:</strong> {{ $post->author }} </br>
                <strong>Создано:</strong> {{ $post->created_at->format('d.m.Y H:i') }}</p>
        </div>
    @endforeach

@endsection