<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
            'price' => fake()->numberBetween(100000,500000),
            'content' => fake()->text(),
            'published'=> 1,
            'image' => fake()->imageUrl(800,600),
        ];
    }
}
