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
        //create array of icon for services using available svg files inside public/img/dummy folder
        $icons = [
            'dummy/brand.svg',
            'dummy/budget.svg',
            'dummy/creativeAds.svg',
            'dummy/optimize.svg',
            'dummy/seo.svg',
            'dummy/social.svg',
        ];
        return [
            //choose random icon from the $icon array
            'icon' => $this->faker->unique()->randomElement(
                $icons
            ),
            //add faker for title
            'title' => $this->faker->sentence(2),
            //add faker for description
            'description' => $this->faker->paragraph,
            //add faker for position unique number between 1-10
            'position' => $this->faker->unique()->numberBetween(1, 6),
        ];
    }
}
