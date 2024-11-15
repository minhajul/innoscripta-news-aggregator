<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence,
            'slug' => Str::slug(fake()->unique()->sentence),
            'source' => fake()->company,
            'author' => fake()->name,
            'category' => fake()->word,
            'content' => fake()->paragraphs(5, true),
            'description' => fake()->paragraph,
            'url' => fake()->url,
            'image_url' => fake()->imageUrl(800, 600, 'articles', true, 'Faker'),
        ];
    }
}
