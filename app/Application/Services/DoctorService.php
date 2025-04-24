<?php
namespace App\Application\Services;

use App\Domain\Doctor\Repositories\DoctorRepositoryInterface;

class DoctorService
{
    public function __construct(
        protected DoctorRepositoryInterface $repo
    ) {}

    public function list() {
        return $this->repo->all();
    }

    public function create(array $data) {
        return $this->repo->create($data);
    }

    public function update($id, array $data) {
        return $this->repo->update($id, $data);
    }

    public function delete($id) {
        return $this->repo->delete($id);
    }

    public function find($id) {
        return $this->repo->find($id);
    }
}
