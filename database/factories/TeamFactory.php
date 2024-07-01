<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //create array of image from dummy/avatar
        $avatars = [
            'avatar.png',
            'avatar1.png',
            'avatar2.png',
            'avatar3.png',
            'avatar4.png',
        ];
        return [
            //create avatar with faker unique random from avatars
            'avatar' => $this->faker->unique()->randomElement($avatars),
            //create name with faker name
            'name' => $this->faker->name,
            //create position with faker job title
            'position' => $this->faker->jobTitle,
            //create twitter with faker url
            'twitter' => $this->faker->url,
            //create facebook with faker url
            'facebook' => $this->faker->url,
            //create instagram with faker url
            'instagram' => $this->faker->url,
            //create linkedin with faker url
            'linkedin' => $this->faker->url,
        ];
    }
}
