<?php
namespace App\Interfaces\Http\Controllers;

use Illuminate\Http\Request;
use App\Application\Services\DoctorService;

class DoctorController extends Controller
{
    public function __construct(protected DoctorService $service) {}

    public function index() {
        $doctors = $this->service->list();
        return view('doctors.index', compact('doctors'));
    }

    public function create() {
        return view('doctors.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'required|string',
            'specialization' => 'required|string',
            'address' => 'required|string',
        ]);

        $this->service->create($data);
        return redirect()->route('doctors.index');
    }

    public function edit($id) {
        $doctor = $this->service->find($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id) {
        $data = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:doctors,email,'.$id,
            'phone' => 'required|string',
            'specialization' => 'required|string',
            'address' => 'required|string',
        ]);

        $this->service->update($id, $data);
        return redirect()->route('doctors.index');
    }

    public function destroy($id) {
        $this->service->delete($id);
        return redirect()->route('doctors.index');
    }



    public function appointments($id)
{
    $doctor = $this->service->find($id);
    $appointments = $doctor->appointments()->with('patient')->latest()->get();

    return view('appointments.by-doctor', compact('doctor', 'appointments'));
}

}
