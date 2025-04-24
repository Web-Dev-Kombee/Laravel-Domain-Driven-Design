<?php

namespace Database\Factories;

use App\Domain\Appointment\Models\Appointment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domain\Doctor\Models\Doctor;
use App\Domain\Patient\Models\Patient;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition()
    {
        $conditions = [
            'Hypertension', 'Diabetes', 'Asthma', 'Arthritis', 'Flu symptoms',
            'Migraine', 'Back pain', 'Allergy', 'Fever', 'Fatigue'
        ];

        return [

'patient_id' => Patient::inRandomOrder()->first()?->id ?? 1,
'doctor_id'  => Doctor::inRandomOrder()->first()?->id ?? 1,

            'appointment_date'  => $this->faker->dateTimeBetween('-1 week', '+2 weeks'),
            'status'            => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
            'notes'             => $this->faker->randomElement($conditions),
        ];
    }
}
