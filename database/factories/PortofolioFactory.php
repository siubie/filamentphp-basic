<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Portofolio>
 */
class PortofolioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //generate factory for portofolio table
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'detail' => $this->faker->paragraph(),
        ];
    }
}
