<?php
namespace App\Interfaces\Http\Controllers;

use Illuminate\Http\Request;
use App\Application\Services\AppointmentService;
use App\Domain\Doctor\Models\Doctor;
use App\Domain\Patient\Models\Patient;
use App\Domain\Appointment\Models\Appointment;

class AppointmentController extends Controller
{
    public function __construct(protected AppointmentService $service) {}

    public function index() {
        $appointments = $this->service->list();
        return view('appointments.index', compact('appointments'));
    }

    public function createForPatient($patient_id) {
        $doctors = Doctor::all();
        return view('appointments.create', compact('patient_id', 'doctors'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
            'status' => 'required|string|in:scheduled,completed,cancelled',
            'notes' => 'nullable|string',
        ]);

        $this->service->create($data);
        return redirect()->route('appointments.index');
    }

    public function doctorAppointments($doctor_id) {
        $appointments = Appointment::where('doctor_id', $doctor_id)->get();
        return view('appointments.doctor_appointments', compact('appointments'));
    }
}
