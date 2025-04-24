@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">👨‍⚕️ Doctors List</h1>
        <a href="{{ route('doctors.create') }}"
           class="inline-block bg-emerald-600 text-white px-4 py-2 rounded hover:bg-emerald-700 transition">
            ➕ Add Doctor
        </a>
    </div>

    <div class="bg-white shadow rounded-lg">
        <table class="w-full table-auto divide-y divide-gray-200">
            <thead class="bg-emerald-100">
                <tr>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Name</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Phone</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Specialization</th>
                    <th class="px-6 py-3 text-left text-sm font-medium text-gray-700">Address</th>
                    <th class="px-6 py-3 text-center text-sm font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse ($doctors as $doctor)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-900 break-words">
                            {{ $doctor->first_name }} {{ $doctor->last_name }}
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-700 break-words">{{ $doctor->email }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 break-words">{{ $doctor->phone }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 break-words">{{ $doctor->specialization }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 break-words">{{ $doctor->address }}</td>
                        <td class="px-6 py-4 text-center text-sm space-x-2">
                            <a href="{{ route('doctors.edit', $doctor->id) }}"
                               class="text-blue-600 hover:underline hover:text-blue-800">Edit</a>

                            <form method="POST" action="{{ route('doctors.destroy', $doctor->id) }}"
                                  class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this doctor?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-600 hover:underline hover:text-red-800">
                                    Delete
                                </button>
                            </form>

                            <a href="{{ route('doctors.appointments.index', $doctor->id) }}"
                               class="text-gray-700 underline hover:text-gray-900">
                                View Appointments
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-sm text-gray-500">
                            No doctors found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
