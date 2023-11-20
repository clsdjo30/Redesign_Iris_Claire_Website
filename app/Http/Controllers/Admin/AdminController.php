<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $posts = Post::with('categories')->get();
        return view('admin.post.index', [
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.post.form');
    }


    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'slug' => 'required|unique:posts',
            'auteur_id' => 'required|exists:auteurs,id',
            'excerpt' => 'required|max:160',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'is_ahead' => 'sometimes|boolean',
            'is_second' => 'sometimes|boolean',
            'alt_description' => 'required|max:150',
        ]);

        if ($request->hasFile('thumbnail')) {
            $filename = $request->file('thumbnail')->store('thumbnails', 'public');
            $validatedData['thumbnail'] = $filename;
        }

        $validatedData['is_ahead'] = $request->has('is_ahead');
        $validatedData['is_second'] = $request->has('is_second');

        $post = Post::create($validatedData);
        event(new \App\Events\PostUpdated($post));


        $categoryIds = $request->input('category_id');
        $post->categories()->attach($categoryIds);

        return redirect()->route('admin.post.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('admin.post.edit',  ['post' => $post, 'auteur' => $post->auteur]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {

        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'auteur_id' => 'required|exists:auteurs,id',
            'excerpt' => 'required',
            'content' => 'required',
            'thumbnail' => $post->exists ? 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048' : 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_ahead' => $post->exists ? 'sometimes|boolean':'required|boolean',
            'is_second' => $post->exists ? 'sometimes|boolean' : 'required|boolean',
            'alt_description' => 'required|max:150',
        ]);

        $post->update($validatedData);
        event(new \App\Events\PostUpdated($post));
        $categoryIds = $request->input('category_id');
        $post->categories()->attach($categoryIds);


        return redirect()->route('admin.post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.index');
    }
}
