<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Appointment\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    public function run()
    {
        Appointment::factory()->count(30)->create();
    }
}
