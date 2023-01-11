<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::factory()
            ->count(1)
            ->hasPets(3)
            ->create();

        \App\Models\Category::factory()
            ->count(2)
            ->hasPets(4)
            ->create();

        \App\Models\Category::factory()
            ->count(3)
            ->hasPets(5)
            ->create();
    }
}
