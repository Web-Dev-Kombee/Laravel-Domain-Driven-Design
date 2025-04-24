<?php
namespace App\Infrastructure\Persistence;

use App\Domain\Patient\Models\Patient;
use App\Domain\Patient\Repositories\PatientRepositoryInterface;

class PatientRepository implements PatientRepositoryInterface
{
    public function all() {
        return Patient::all();
    }

    public function find($id) {
        return Patient::findOrFail($id);
    }

    public function create(array $data) {
        return Patient::create($data);
    }

    public function update($id, array $data) {
        $patient = Patient::findOrFail($id);
        $patient->update($data);
        return $patient;
    }

    public function delete($id) {
        return Patient::destroy($id);
    }
}
