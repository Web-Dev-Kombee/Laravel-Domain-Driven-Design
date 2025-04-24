<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking System</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Optional: Bootstrap for any legacy components -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

<nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-6">
                <a href="#" class="text-xl font-bold text-blue-600">BookMyCare</a>
                <a href="{{ route('patients.index') }}" class="hover:text-blue-600 transition">Patients</a>
                <a href="{{ route('doctors.index') }}" class="hover:text-blue-600 transition">Doctors</a>
                <a href="{{ route('appointments.index') }}" class="hover:text-blue-600 transition">Appointments</a>
            </div>
            <div class="flex items-center space-x-3">
                @guest
                    <a href="{{ route('login') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Register</a>
                @else
                    <form method="GET" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>


    <div class="container mx-auto px-4 py-6">
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>
