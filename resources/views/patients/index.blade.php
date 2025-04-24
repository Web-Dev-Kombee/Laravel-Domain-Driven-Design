@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">🧑‍⚕️ Patients List</h1>
        <a href="{{ route('patients.create') }}"
           class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            ➕ Add Patient
        </a>
    </div>

    <div class="bg-white shadow rounded-lg">
        <table class="w-full table-auto divide-y divide-gray-200">
            <thead class="bg-blue-100">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Name</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Email</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Phone</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Address</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Gender</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">DOB</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700">Blood group</th>
                    <th class="px-4 py-3 text-center text-sm font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 bg-white">
                @forelse($patients as $patient)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-4 text-sm text-gray-900 break-words">
                            {{ $patient->first_name }} {{ $patient->last_name }}
                        </td>
                        <td class="px-4 py-4 text-sm text-gray-700 break-words">{{ $patient->email }}</td>
                        <td class="px-4 py-4 text-sm text-gray-700 break-words">{{ $patient->phone }}</td>
                        <td class="px-4 py-4 text-sm text-gray-700 break-words">{{ $patient->address }}</td>
                        <td class="px-4 py-4 text-sm text-gray-700">{{ $patient->gender }}</td>
                        <td class="px-4 py-4 text-sm text-gray-700">{{ $patient->date_of_birth }}</td>
                        <td class="px-4 py-4 text-sm text-gray-700">{{ $patient->blood_group }}</td>
                        <td class="px-4 py-4 text-center text-sm space-x-2">
                            <a href="{{ route('patients.edit', $patient->id) }}"
                               class="text-yellow-600 hover:underline hover:text-yellow-800">Edit</a>

                            <form action="{{ route('patients.destroy', $patient->id) }}"
                                  method="POST"
                                  class="inline-block"
                                  onsubmit="return confirm('Are you sure you want to delete this patient?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="text-red-600 hover:underline hover:text-red-800">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="px-6 py-4 text-center text-sm text-gray-500">
                            No patients found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
