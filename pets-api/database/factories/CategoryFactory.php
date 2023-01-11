<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->randomElement(['Dog', 'Cat', 'Bunny', 'Hamster', 'Fish', 'Bird']);
        return [
            'name' => $name
        ];
    }
}
