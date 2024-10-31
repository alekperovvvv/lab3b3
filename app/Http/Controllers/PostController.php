<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Валидация входящих данных
        $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        // Создание нового поста с указанием поля author
        Post::create([
            'title' => $request->input('title'),
            'author' => $request->input('author'),
        ]);

        return redirect()->route('posts.index');
    }
}
