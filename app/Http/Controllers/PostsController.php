<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categoryList = Category::all();
        $postList = Post::with('category')->paginate(50);
        return view('posts.index', compact('postList', 'categoryList'));
    }
}
