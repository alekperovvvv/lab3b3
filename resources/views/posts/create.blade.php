@extends('layouts.app')

@section('content')
    <h2>Добавить новый пост</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
        <label for="title">Номер телефона:</label>
        <input type="number" name="title" required>
        </div>
        <div>
        <label for="author">Наименование контакта</label>
        <input type="text" name="author" required>
        </div>
        <button type="submit">Создать контакт</button>
    </form>

@endsection 