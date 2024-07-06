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
        //create array of svg icons from storage/dummy folder
        $icons = [
            'dummy/brand.svg',
            'dummy/budget.svg',
            'dummy/creativeAds.svg',
            'dummy/optimize.svg',
            'dummy/seo.svg',
            'dummy/social.svg',
        ];
        return [
            //create factory for service table
            'icon' => $this->faker->unique()->randomElement($icons),
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(),
        ];
    }
}
