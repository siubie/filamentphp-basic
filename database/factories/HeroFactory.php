<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hero>
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
            //generate factory for hero model
            'image' => $this->faker->imageUrl(),
            'title' => "We are a Digital Agency serve#Online Marketing|Web Design|Brand Identity|Social Content",
            'subtitle' => $this->faker->sentence(),
            'link1' => $this->faker->url(),
            'link2' => $this->faker->url(),
            'is_active' => false
        ];
    }
}
