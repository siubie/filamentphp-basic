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
        //call hero factory to create 10 heros
        \App\Models\Hero::factory(15)->create();
        //create one hero
        \App\Models\Hero::create([
            'title' => 'We are a Digital Agency serve#Online Marketing|Web Design|Brand Identity|Social Content',
            'subtitle' => 'We would direct you to limitless ideas and move your brand into a global landscape.',
            'image' => 'dummy/hero.svg',
            'is_active' => true,
            'link1' => 'https://www.google.com',
            'link2' => 'https://www.google.com'
        ]);
    }
}
