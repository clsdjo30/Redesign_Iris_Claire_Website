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
        return view('admin.post.index', [
            'posts' => Post::all()
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
            'auteur_id' => 'required|exists:auteurs,id', // Assurez-vous que l'auteur existe
            'excerpt' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required',
            'is_ahead' => 'required|boolean',
            'alt_description' => 'required|max:150',
        ]);

        Post::create($validatedData);

        if ($request->hasFile('thumbnail')) {
            $filename = $request->file('thumbnail')->store('thumbnails', 'public');
            $validatedData['thumbnail'] = $filename;
        }

        return redirect()->route('admin.post.index');

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {

        $validatedData = $request->validate([
            'title' => 'required|max:150',
            'slug' => 'required|unique:posts,slug,' . $post->id,
            'auteur_id' => 'required|exists:autors,id',
            'excerpt' => 'required',
            'content' => 'required',
            'thumbnail' => 'required',
            'is_ahead' => 'required|boolean',
            'alt_description' => 'required|max:150',
        ]);

        $post->update($validatedData);

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
