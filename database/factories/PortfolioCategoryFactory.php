<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PortfolioCategory>
 */
class PortfolioCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add faker for name
            'name' => $this->faker->word,
            //add faker for description
            'description' => $this->faker->sentence
        ];
    }
}
