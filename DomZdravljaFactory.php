<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DomZdravljaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'naziv' => $this->faker->unique()->company(),
            'adresa' => $this->faker->unique()->streetAddress(),
            'email' => $this->faker->unique()->companyEmail(),
            'grad' => $this->faker->unique()->city(),
            'zastupnik' => $this->faker->unique()->name(),
        ];
    }
}
