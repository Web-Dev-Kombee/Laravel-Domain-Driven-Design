<?php
namespace App\Infrastructure\Persistence;

use App\Domain\Doctor\Models\Doctor;
use App\Domain\Doctor\Repositories\DoctorRepositoryInterface;

class DoctorRepository implements DoctorRepositoryInterface
{
    public function all() {
        return Doctor::all();
    }

    public function find($id) {
        return Doctor::findOrFail($id);
    }

    public function create(array $data) {
        return Doctor::create($data);
    }

    public function update($id, array $data) {
        $doctor = Doctor::findOrFail($id);
        $doctor->update($data);
        return $doctor;
    }

    public function delete($id) {
        return Doctor::destroy($id);
    }
}
