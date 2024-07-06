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
        //create image for hero
        $customAnimation = [
            "Online Marketing",
            "Web Design",
            "Mobile Apps",
            "Brand Identity",
            "Social Content"
        ];
        return [
            //create factory for hero
            'image' => 'dummy/hero.svg',
            'title' => $this->faker->sentence() . '|' . implode('#', $customAnimation),
            'subtitle' => $this->faker->sentence(),
            'link_one' => $this->faker->url(),
            'link_two' => $this->faker->url(),
            'is_active' => false,
        ];
    }
}
