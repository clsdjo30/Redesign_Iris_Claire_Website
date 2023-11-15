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
            $posts = Post::paginate(5);
            $latestPosts = Post::latest()->take(5)->get();
            $categories = Category::all();

            return view('blog.index', [
                'posts' => $posts,
                'latestPosts' => $latestPosts,
                'categories' => $categories
            ]);
        }
        public function show(Post $post) {
            $latestPosts = Post::latest()->take(5)->get();
            $categories = Category::all();
            return view('blog.show', [
                'post' => $post,
                'latestPosts' => $latestPosts,
                'categories' => $categories
            ]);
        }

        public function like(Post $post)
        {
            // Ici, vous pouvez utiliser une table séparée pour les likes ou simplement incrémenter un compteur.
            // Exemple avec un compteur simple:
            $post->increment('like_count');

            return response()->json(['like_count' => $post->like_count]);
        }
        public function unlike(Post $post)
        {
            // Ici, vous pouvez utiliser une table séparée pour les likes ou simplement incrémenter un compteur.
            // Exemple avec un compteur simple:
            $post->decrement('like_count');

            return back();
        }

    }
