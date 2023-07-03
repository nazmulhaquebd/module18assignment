<?php

namespace App\Http\Controllers;

use App\Models\Post as ModelsPost;
use App\Post;

class PostController extends Controller
{
    public function delete($id)
    {
        $post = ModelsPost::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
    public function index()
    {
        $posts = ModelsPost::with('category')->get();

        return view('posts', ['posts' => $posts]);
    }
}

