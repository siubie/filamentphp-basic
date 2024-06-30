<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //create 6 services
        \App\Models\Service::factory(6)->create();
        //create one hero
        \App\Models\Hero::create([
            'title' => 'We are a Digital Agency serve#Online Marketing|Web Design|Brand Identity|Social Content',
            'subtitle' => 'We would direct you to limitless ideas and move your brand into a global landscape.',
            'image' => 'https://via.placeholder.com/640x480.png/00ee11?text=est',
            'is_active' => true,
            'link1' => 'https://www.google.com',
            'link2' => 'https://www.google.com'
        ]);
    }
}
