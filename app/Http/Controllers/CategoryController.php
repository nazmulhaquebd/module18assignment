<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Models\Category as ModelsCategory;

class CategoryController extends Controller
{
    public function getPosts($id)
    {
        $category = ModelsCategory::findOrFail($id);
        $posts = $category->posts;

        return view('category.posts', ['category' => $category, 'posts' => $posts]);
    }
    public function index()
    {
        $categories = ModelsCategory::all();

        return view('latest_posts', ['categories' => $categories]);
    }
}

