@extends('layouts.auth')

@section('content')
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
@endif

<style>
    body {
        background: linear-gradient(to right, #e3f2fd, #e0f7fa);
        font-family: 'Segoe UI', sans-serif;
    }
</style>

<div class="min-h-screen flex items-center justify-center px-4 py-12">
    <div class="bg-white rounded-2xl shadow-2xl w-full max-w-6xl flex flex-col md:flex-row overflow-hidden">
        
        <!-- Left Panel: Branding -->
        <div class="md:w-1/2 bg-gradient-to-br from-teal-600 to-cyan-700 text-white flex flex-col justify-center items-center p-10">
        <img src="data:image/jpeg;base64,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" alt="Doctor" class="w-64 mb-6">
        <h2 class="text-3xl font-bold">Welcome to BookMyCare</h2>
            <p class="mt-3 text-lg opacity-90 text-center max-w-sm">Your trusted platform to book appointments with the best doctors and specialists.</p>
        </div>

        <!-- Right Panel: Register Form -->
        <div class="md:w-1/2 p-10">
            <h3 class="text-2xl font-semibold text-center mb-6 text-gray-700">Create Your Account</h3>
            <form id="registerForm" method="POST" action="{{ route('web.register') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" id="name" required
                        class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-teal-500 focus:border-teal-500 @error('name') border-red-500 @enderror"
                        value="{{ old('name') }}">
                    @error('name') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required
                        class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-teal-500 focus:border-teal-500 @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                    @error('email') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-teal-500 focus:border-teal-500 @error('password') border-red-500 @enderror">
                    @error('password') <p class="text-sm text-red-500 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required
                        class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-teal-500 focus:border-teal-500">
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full py-3 rounded-lg bg-teal-600 text-white font-medium text-lg hover:bg-teal-700 transition">
                        Register
                    </button>
                </div>
            </form>

            <p class="text-sm text-center mt-6 text-gray-500">
                Already have an account?
                <a href="{{ route('login') }}" class="text-teal-600 hover:underline font-medium">Log In</a>
            </p>
        </div>
    </div>
</div>

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById('registerForm');
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const passwordConfirm = document.getElementById('password_confirmation');

        form.addEventListener('submit', function (e) {
            let valid = true;

            if (!name.value.trim()) {
                name.classList.add('border-red-500');
                valid = false;
            }

            if (!email.value.includes('@')) {
                email.classList.add('border-red-500');
                valid = false;
            }

            if (password.value.length < 6) {
                password.classList.add('border-red-500');
                valid = false;
            }

            if (passwordConfirm.value !== password.value || passwordConfirm.value === "") {
                passwordConfirm.classList.add('border-red-500');
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
                toastr.error('Please fix the errors in the form.', 'Validation Error');
            }
        });

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    });
</script>
@endpush
@endsection
