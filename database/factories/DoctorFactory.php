<?php

namespace Database\Factories;

use App\Domain\Doctor\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'specialization' => $this->faker->randomElement([
                'Cardiology', 'Dermatology', 'Neurology', 'Pediatrics', 'Oncology'
            ]),
            'address' => $this->faker->address(),
        ];
    }
}



