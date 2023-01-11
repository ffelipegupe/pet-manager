<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName();
        $photoUrl = $this->faker->imageUrl('$width = 640, $height = 480');
        $status = $this->faker->randomElement(['available', 'pending', 'sold']);
        return [
            'name' => $name,
            'photo_urls' => $photoUrl,
            'status' => $status
        ];
    }
}
