@extends('layouts.auth')

@section('content')
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@else
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
@endif

<body class="bg-gradient-to-br from-white via-blue-50 to-cyan-100 min-h-screen flex items-center justify-center font-sans">
    <div class="w-full max-w-5xl mx-auto bg-white shadow-2xl rounded-3xl overflow-hidden flex flex-col md:flex-row border border-gray-200">
        
        <!-- Left Panel -->
        <div class="md:w-1/2 bg-gradient-to-br from-cyan-700 to-blue-700 text-white p-10 flex flex-col justify-between">
            <div>
                <h2 class="text-3xl font-bold mb-2">Welcome to</h2>
                <h1 class="text-4xl font-extrabold mb-6 tracking-tight">Book<span class="text-cyan-300">My</span>Care</h1>
                <p class="text-lg mb-10 leading-relaxed opacity-90">Your reliable partner in seamless doctor appointments and patient management.</p>
                
                <img src="https://img.freepik.com/free-vector/doctor-character-background_1270-84.jpg?w=826&t=st=1713719506~exp=1713720106~hmac=5532309d308b56b4d4b2e2f0d30e6f1d3cba2c1eea92ddcb180b6a79065c4980" 
                     alt="Medical illustration" class="rounded-lg shadow-lg w-full">
            </div>

            <div class="text-sm text-center mt-10">
                <p>Don't have an account?</p>
                <a href="{{ route('register') }}"
                   class="inline-block mt-2 px-5 py-2 border border-white rounded-full hover:bg-white hover:text-cyan-700 font-medium transition">
                    Register Now
                </a>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="md:w-1/2 p-10 bg-white">
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold text-cyan-700">Login to Your Account</h3>
                <p class="text-gray-500 mt-2 text-sm">Manage your appointments & stay connected with healthcare providers.</p>
            </div>

            <form method="POST" action="{{ route('web.login') }}" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                    <div class="relative mt-1">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                        <input id="email" name="email" type="email" required
                               class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500"
                               placeholder="you@example.com" value="{{ old('email') }}">
                    </div>
                    @error('email') <p class="text-sm text-red-600 mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <div class="flex justify-between items-center">
                        <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
                        @if(Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-sm text-cyan-600 hover:underline">
                            Forgot?
                        </a>
                        @endif
                    </div>
                    <div class="relative mt-1">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                            <i class="bi bi-lock-fill"></i>
                        </span>
                        <input id="password" name="password" type="password" required
                               class="pl-10 pr-4 py-2 w-full border border-gray-300 rounded-md focus:ring-cyan-500 focus:border-cyan-500"
                               placeholder="Enter password">
                    </div>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember"
                           class="h-4 w-4 text-cyan-600 focus:ring-cyan-500 border-gray-300 rounded">
                    <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                </div>

                <button type="submit"
                        class="w-full bg-cyan-600 hover:bg-cyan-700 text-white font-semibold py-2 px-4 rounded-md transition duration-200">
                    Sign In
                </button>
            </form>

            <div class="text-center text-gray-400 text-xs mt-8">
                &copy; {{ date('Y') }} BookMyCare. All rights reserved.
            </div>
        </div>
    </div>
</body>
@endsection
