<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        $latestPosts = Post::latest()->take(5)->get();
        $categories = Category::all();

        return view('blog.index', [
            'posts' => $posts,
            'latestPosts' => $latestPosts,
            'categories' => $categories
        ]);
    }
    public function show($post) {
        return view('')->name('');
    }

}
