@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Doctor's Appointments</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Patient</th><th>Date</th><th>Status</th><th>Notes</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->patient->first_name }} {{ $appointment->patient->last_name }}</td>
                        <td>{{ $appointment->appointment_date }}</td>
                        <td>{{ ucfirst($appointment->status) }}</td>
                        <td>{{ $appointment->notes }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
