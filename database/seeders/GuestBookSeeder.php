<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //call factory for GuestBook and create 10 guestbook entry
        \App\Models\GuestBook::factory(10)->create();
    }
}
