<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestation>
 */
class PrestationFactory extends Factory
{
    

    public function definition(): array
    {
        return [
            'name' => fake()->sentence(1),
            'details' => fake()->text(),
            'price' => fake()->randomFloat(2,5,50),
            'time' => fake()->numberBetween(15, 90),
        ];
    }
}
