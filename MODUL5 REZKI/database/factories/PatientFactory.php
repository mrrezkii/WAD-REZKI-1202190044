<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vaccine_id' => mt_rand(1, 9),
            'name' => $this->faker->name(),
            'nik' => $this->faker->nik(),
            'alamat' => $this->faker->address(),
            'image_ktp' => 'https://source.unsplash.com/350x200/?smile',
            'no_hp' => $this->faker->phoneNumber()
        ];
    }
}
