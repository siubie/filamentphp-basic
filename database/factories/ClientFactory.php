<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //create array of image for client
        $images = [
            'dummy/img1.png',
            'dummy/img2.png',
            'dummy/img3.png',
            'dummy/img4.png',
            'dummy/img5.png',
            'dummy/img6.png',
            'dummy/img7.png',
            'dummy/img8.png',
        ];
        return [
            //add faker to image unique from array
            'image' => $this->faker->unique()->randomElement($images),
            //add faker for company name
            'name' => $this->faker->company(),
        ];
    }
}
