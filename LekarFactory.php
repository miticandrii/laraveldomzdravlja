<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DomZdravlja;

class LekarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime' => $this->faker->firstName(),
            'prezime' => $this->faker->lastName(),
            'email' => $this->faker->unique()->email(),
            'telefon' => $this->faker->unique()->e164PhoneNumber(),
            'broj_licence' => $this->faker->unique()->numerify('######'),
            'dom_zdravlja_id' => DomZdravlja::factory()

        ];
    }
}
