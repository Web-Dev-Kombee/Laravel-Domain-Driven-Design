<?php
namespace App\Interfaces\Http\Controllers;

use Illuminate\Http\Request;
use App\Application\Services\PatientService;
use App\Interfaces\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function __construct(protected PatientService $service) {}

    public function index() {
        $patients = $this->service->list();
        return view('patients.index', compact('patients'));
    }

    public function create() {
        return view('patients.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'address' => 'required|string',
            'blood_group' => 'required|string',
        ]);

        $this->service->create($data);
        return redirect()->route('patients.index');
    }

    public function edit($id) {
        $patient = $this->service->find($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:patients,email,'.$id,
            'phone' => 'required|string',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'address' => 'required|string',
            'blood_group' => 'required|string',
        ]);

        $this->service->update($id, $data);
        return redirect()->route('patients.index');
    }

    public function destroy($id) {
        $this->service->delete($id);
        return redirect()->route('patients.index');
    }
}
