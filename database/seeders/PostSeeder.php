<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Créer 10 posts et pour chaque post, attacher des catégories aléatoires.
        Post::factory(10)->create()->each(function ($post) {
            // Supposons que vous voulez attacher entre 1 et 3 catégories aléatoires à chaque post.
            // Assurez-vous que des catégories existent déjà dans la base de données.
            $categories = Category::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $post->categories()->attach($categories);
        });
    }
}
