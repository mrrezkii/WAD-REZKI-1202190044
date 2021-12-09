<?php

namespace Database\Seeders;

use App\Models\Patients;
use App\Models\Vaccines;
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
        Vaccines::factory(9)->create();
        Patients::factory(10)->create();
    }
}
