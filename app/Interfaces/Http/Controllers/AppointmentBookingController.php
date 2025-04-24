<?php

namespace App\Interfaces\Http\Controllers;

use Illuminate\Http\Request;
use App\Domain\Doctor\Models\Doctor;
use App\Domain\Patient\Models\Patient;
use App\Application\Services\AppointmentService;

class AppointmentBookingController extends Controller
{
    public function __construct(protected AppointmentService $service) {}

    public function showDoctorList($patientId)
    {
        $doctors = Doctor::all();
        return view('appointments.book', compact('doctors', 'patientId'));
    }

    public function book(Request $request)
    {
        $data = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id' => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
            'status' => 'required|string|in:scheduled,completed,cancelled',
            'notes' => 'nullable|string',
        ]);

        $this->service->create($data);

        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }
}
