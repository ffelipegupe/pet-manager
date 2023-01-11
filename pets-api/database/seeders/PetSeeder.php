<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Pet::factory()
        ->count(3)
        ->hasTags(3)
        ->create();

    \App\Models\Pet::factory()
        ->count(4)
        ->hasTags(4)
        ->create();

    \App\Models\Pet::factory()
        ->count(5)
        ->hasTags(5)
        ->create();
    }
}
