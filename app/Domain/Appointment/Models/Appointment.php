<?php
namespace App\Domain\Appointment\Models;

use App\Domain\Patient\Models\Patient;
use App\Domain\Doctor\Models\Doctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\AppointmentFactory;

class Appointment extends Model
{

    use HasFactory;
    protected $fillable = [
        'patient_id', 'doctor_id', 'appointment_date', 'status', 'notes'
    ];

    public function patient() {
        return $this->belongsTo(Patient::class);
    }

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }

    protected static function newFactory()
    {
        return AppointmentFactory::new();
    }
}
