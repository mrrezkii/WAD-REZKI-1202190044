<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Vaccine;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Vaccine::factory(9)->create();
        Patient::factory(10)->create();
    }
}
