<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add faker for icon
            'icon' => $this->faker->imageUrl(),
            //add faker for title
            'title' => $this->faker->sentence(2),
            //add faker for description
            'description' => $this->faker->paragraph,
            //add faker for position unique number between 1-10
            'position' => $this->faker->unique()->numberBetween(1, 6),
        ];
    }
}
