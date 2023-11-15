<?php

namespace Database\Factories;

use App\Models\Auteur;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence(8);
        $content = fake()->paragraphs(asText: true);
        $createdAt = fake()->dateTimeBetween('- 1 year' );

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'excerpt' => Str::limit($content, 150),
            'auteur_id' => Auteur::all()->random()->id,
            'content' => $content,
            'thumbnail' => fake()->imageUrl,
            'is_ahead' => fake()->boolean(10),
            'alt_description' => fake()->sentence(4),
            'created_at' => $createdAt,
            'updated_at' => $createdAt,
            'like' => fake()->numberBetween(0, 200)

        ];
    }
}
