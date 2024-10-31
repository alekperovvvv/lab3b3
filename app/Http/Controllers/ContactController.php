<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
class ContactController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate(['content' => 'required']);

        $post->contacts()->create($request->all());
        return redirect()->route('posts.show', $post);
    }
}