<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Doctor\Models\Doctor;

class DoctorSeeder extends Seeder
{
    public function run(): void
    {
        Doctor::factory()->count(10)->create(); // Generate 10 doctors
        
    }
}
