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
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        return [
            'title' => $faker->vehicle,
            'price' => fake()->numberBetween(100000, 500000),
            'content' => $faker->vehicleType,
            'published' => 1,
            'image' => fake()->imageUrl(800, 600),
            'cat_id' => fake()->numberBetween(1, 10)
        ];
    }
}
