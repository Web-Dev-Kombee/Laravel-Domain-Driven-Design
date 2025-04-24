<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Patient\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run()
    {
        Patient::factory()->count(20)->create();
    }
}
