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
    public function definition(): array
    {
        return [
            'title' => fake()->words(6, true),
            'slug' => fake()->words(6, true),
            'content' => fake()->sentences(10, true),
            'tags' => [fake()->numberBetween(1, 8),],
        ];
    }
}
