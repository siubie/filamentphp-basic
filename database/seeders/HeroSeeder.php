<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create hero using factory
        \App\Models\Hero::factory(10)->create();
        //call hero factory set is_active to true
        \App\Models\Hero::factory()->create([
            'is_active' => true,
        ]);
    }
}
