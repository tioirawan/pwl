<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake('id_ID')->sentence(3),
            'author' => fake('id_ID')->name(),
            'content' => fake('id_ID')->paragraph(10),
            'genre' => fake('id_ID')->randomElement(['Horror', 'Romance', 'Comedy', 'Drama', 'Action', 'Adventure']),
            'rating' => fake('id_ID')->randomFloat(1, 0, 5),
            'status' => fake('id_ID')->randomElement(['published', 'draft']),
        ];
    }
}
