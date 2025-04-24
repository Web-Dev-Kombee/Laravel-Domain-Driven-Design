<?php
namespace App\Domain\Patient\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\PatientFactory;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'phone', 
        'date_of_birth', 'gender', 'address', 'blood_group'
    ];

    protected static function newFactory()
    {
        return PatientFactory::new();
    }
}
