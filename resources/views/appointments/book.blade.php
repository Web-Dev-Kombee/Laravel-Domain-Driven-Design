@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white shadow-md rounded p-6 mt-10">
    <h2 class="text-xl font-semibold mb-4">Book Appointment</h2>

    <form method="POST" action="{{ route('appointments.book.store') }}">
        @csrf

        <input type="hidden" name="patient_id" value="{{ $patientId }}">

        <div class="mb-4">
            <label for="doctor_id" class="block text-sm font-medium text-gray-700">Select Doctor</label>
            <select name="doctor_id" id="doctor_id" class="w-full mt-1 border rounded p-2">
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }} ({{ $doctor->specialization }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="appointment_date" class="block text-sm font-medium text-gray-700">Appointment Date</label>
            <input type="date" name="appointment_date" id="appointment_date" class="w-full mt-1 border rounded p-2" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
            <select name="status" id="status" class="w-full mt-1 border rounded p-2">
                <option value="scheduled">Scheduled</option>
                <option value="completed">Completed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="notes" class="block text-sm font-medium text-gray-700">Notes</label>
            <textarea name="notes" id="notes" rows="3" class="w-full mt-1 border rounded p-2"></textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Book Appointment</button>
    </form>
</div>
@endsection
