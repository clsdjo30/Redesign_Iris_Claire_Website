<?php

    namespace App\Http\Controllers;

    use App\Models\Category;
    use App\Models\Post;
    use Artesaos\SEOTools\Facades\TwitterCard;
    use Artesaos\SEOTools\Facades\SEOMeta;
    use Artesaos\SEOTools\Facades\OpenGraph;




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

            /**SEO**/
            SEOMeta::setTitle("Blog d'Iris Claire - Votre application de tarot divinatoire de poche");
            SEOMeta::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
            SEOMeta::setCanonical('https://irisclaire.fr/');
            SEOMeta::addKeyword('tarot divinatoire, application mobile');

            OpenGraph::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
            OpenGraph::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");
            OpenGraph::setUrl('https://votre-url.com/');
            OpenGraph::addProperty('type', 'website');

            TwitterCard::setTitle('Iris Claire - Votre application de tarot divinatoire de poche');
            TwitterCard::setDescription("Découvrez le tarot unique Iris Claire, votre guide spirituel personnel pour l'amour, la carrière et le bien-être. Rejoignez la communauté Iris Claire aujourd'hui.");


            return view('blog.index', [
                'posts' => $posts,
                'latestPosts' => $latestPosts,
                'categories' => $categories
            ]);
        }
        public function show(Post $post) {
            $latestPosts = Post::latest()->take(5)->get();
            $categories = Category::all();
            $catName =

            /**SEO**/
            SEOMeta::setTitle($post->title);
            SEOMeta::setDescription($post->excerpt);
            SEOMeta::setCanonical('https://irisclaire.fr/'.$post->slug);
            SEOMeta::addKeyword('tarot divinatoire, application mobile');

            OpenGraph::setTitle($post->title);
            OpenGraph::setDescription($post->excerpt);
            OpenGraph::setUrl('https://irisclaire.fr/'.$post->slug);
            OpenGraph::addProperty('type', 'website');
            OpenGraph::setType('article');
            OpenGraph::addImage($post->thumbnail)
                ->setArticle([
                    'published_time' => $post->created_at,
                    'modified_time' => $post->updated_at,
                    'author' => $post->auteur->name,
                ]);
            foreach ($post->categories as $category) {
                OpenGraph::addProperty('article:tag', $category->name);
            }
            ;

            TwitterCard::setTitle($post->title);
            TwitterCard::setDescription($post->excerpt)
            ->setType('article')
            ->setImage($post->thumbnail)
            ->setUrl('https://irisclaire.fr/'.$post->slug);

            return view('blog.show', [
                'post' => $post,
                'latestPosts' => $latestPosts,
                'categories' => $categories
            ]);
        }


    }
