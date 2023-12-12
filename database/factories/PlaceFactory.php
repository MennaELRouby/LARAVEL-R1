<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'created_at'=>fake()->dateTimeBetween('-2 years','now',null) ,
            'title' => fake()->city(),
            'type'=>fake()->cityPrefix(),
            'fprice' => fake()->numberBetween(100,500),
            'toprice' => fake()->numberBetween(500,800),
            'content' => fake()->text(),
            'image' => fake()->imageUrl(800,600),
        ];
    }
}
