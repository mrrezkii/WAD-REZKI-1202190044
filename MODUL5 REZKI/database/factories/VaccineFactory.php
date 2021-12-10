<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VaccineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    private $vaccineName = ['Sinovac', 'Bio Farma', 'AstraZeneca', 'Sinopharm', 'Moderna', 'Pfizer', 'Sputnik V', 'Janssen', 'Convidecia'];

    public function definition()
    {
        return [
            'name' => $this->faker->unique->randomElement($this->vaccineName),
            'price' => mt_rand(150000, 350000),
            'description' => $this->faker->paragraph(3),
            'image' => 'https://source.unsplash.com/350x200/?vaccines'
        ];
    }
}
