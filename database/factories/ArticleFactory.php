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
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->unique()->sentence),
            'source' => $this->faker->company,
            'author' => $this->faker->name,
            'category' => $this->faker->word,
            'content' => $this->faker->paragraphs(5, true),
            'description' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'image_url' => $this->faker->imageUrl(800, 600, 'articles', true, 'Faker'),
        ];
    }
}
