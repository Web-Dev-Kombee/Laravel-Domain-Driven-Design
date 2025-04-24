<?php
namespace App\Infrastructure\Persistence;

use App\Domain\Appointment\Models\Appointment;
use App\Domain\Appointment\Repositories\AppointmentRepositoryInterface;

class AppointmentRepository implements AppointmentRepositoryInterface
{
    public function all() {
        return Appointment::all();
    }

    public function find($id) {
        return Appointment::findOrFail($id);
    }

    public function create(array $data) {
        return Appointment::create($data);
    }

    public function update($id, array $data) {
        $appointment = Appointment::findOrFail($id);
        $appointment->update($data);
        return $appointment;
    }

    public function delete($id) {
        return Appointment::destroy($id);
    }
}
 