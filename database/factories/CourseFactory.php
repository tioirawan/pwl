<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(10),
            'sks' => fake()->randomElement(['1', '2', '3', '4']),
            'semester' => fake()->randomElement(['1', '2', '3', '4', '5', '6', '7', '8']),
            'description' => fake()->text,
            'lecturer' => fake()->name,
            'day' => fake()->randomElement(['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu']),
        ];
    }
}
