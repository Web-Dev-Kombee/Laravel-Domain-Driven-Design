<?php

namespace Database\Factories;

use App\Domain\Patient\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [
            'first_name'    => $this->faker->firstName,
            'last_name'     => $this->faker->lastName,
            'email'         => $this->faker->unique()->safeEmail,
            'phone'         => $this->faker->phoneNumber,
            'date_of_birth' => $this->faker->date('Y-m-d'),
            'gender'        => $this->faker->randomElement(['male', 'female', 'other']),
            'address'       => $this->faker->address,
            'blood_group'   => $this->faker->randomElement(['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-']),
        ];
    }
}
