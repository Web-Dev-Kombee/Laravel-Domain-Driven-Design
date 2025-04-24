@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Book Appointment</h2>

        <form action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="patient_id" value="{{ $patient_id }}">
            
            <div class="mb-3">
                <label>Doctor</label>
                <select name="doctor_id" class="form-control" required>
                    @foreach ($doctors as $doc)
                        <option value="{{ $doc->id }}">{{ $doc->first_name }} {{ $doc->last_name }} ({{ $doc->specialization }})</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label>Appointment Date</label>
                <input type="date" name="appointment_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="scheduled" selected>Scheduled</option>
                    <option value="completed">Completed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Notes</label>
                <textarea name="notes" class="form-control"></textarea>
            </div>

            <button class="btn btn-success">Book Appointment</button>
        </form>
    </div>
@endsection
