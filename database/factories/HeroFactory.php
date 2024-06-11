<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\hero>
 */
class HeroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //create factory for hero
            'image' => $this->faker->imageUrl(),
            'title' => $this->faker->sentence(),
            'subtitle' => $this->faker->sentence(),
            'link_one' => $this->faker->url(),
            'link_two' => $this->faker->url(),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
