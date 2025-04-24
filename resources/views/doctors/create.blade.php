@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Doctor</h2>

        <form action="{{ route('doctors.store') }}" method="POST">
            @csrf
            @include('doctors.form')
            <button class="btn btn-success mt-3">Save Doctor</button>
        </form>
    </div>
@endsection
  