<?php

namespace App\Domain\Doctor\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Domain\Appointment\Models\Appointment;
use Database\Factories\DoctorFactory;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 
        'specialization', 'address'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // 👇 Tell Laravel where to find the factory
    protected static function newFactory()
    {
        return DoctorFactory::new();
    }
}
