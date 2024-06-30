<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portfolio>
 */
class PortfolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add faker for image
            'image' => $this->faker->imageUrl(),
            //add faker for title
            'title' => $this->faker->word,
            //add faker for description
            'description' => $this->faker->paragraph,
            //add faker for category_id
            'category_id' => \App\Models\PortfolioCategory::factory()
        ];
    }
}
