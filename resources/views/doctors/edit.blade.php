@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Doctor</h2>

        <form action="{{ route('doctors.update', $doctor->id) }}" method="POST">
            @csrf @method('PUT')
            @include('doctors.form', ['doctor' => $doctor])
            <button class="btn btn-primary mt-3">Update Doctor</button>
        </form>
    </div>
@endsection
