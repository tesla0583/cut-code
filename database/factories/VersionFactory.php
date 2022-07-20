<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VersionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->biasedNumberBetween(8.56, 8.61),
            'release_date' => $this->faker->date('Y-m-d'),
        ];
    }
}
