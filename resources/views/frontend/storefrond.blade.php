<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>E-Library Store</title>
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>
<body class="bg-[#fefae0] text-gray-800">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-indigo-900 via-indigo-800 to-indigo-700 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold tracking-wide">📘 E-Library</a>
            <ul class="flex space-x-6 text-white font-medium">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/store" class="hover:underline">Store</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
            <div class="space-x-2">
                @auth
                    <a href="/dashboard" class="text-white px-4 py-2 bg-green-500 hover:bg-green-600 rounded-lg shadow">Dashboard</a>
                @else
                    <a href="/login" class="text-white px-4 py-2 bg-gray-700 hover:bg-gray-800 rounded-lg">Login</a>
                    <a href="/register" class="text-white px-4 py-2 bg-yellow-500 hover:bg-yellow-600 rounded-lg">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Store Page -->
    <section class="container mx-auto px-6 py-16">
        <h1 class="text-4xl font-extrabold text-center mb-12 text-[#1e3a8a] drop-shadow">📍 Our Library Locations</h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @php
                $libraries = [
                    ['name' => 'Jakarta', 'address' => 'Jl. Sudirman No. 10, Jakarta'],
                    ['name' => 'Bandung', 'address' => 'Jl. Sudirman No. 10, Bandung'],
                    ['name' => 'Depok', 'address' => 'Jl. Sudirman No. 10, Depok'],
                    ['name' => 'Bogor', 'address' => 'Jl. Sudirman No. 10, Bogor'],
                    ['name' => 'Tangerang', 'address' => 'Jl. Sudirman No. 10, Tangerang'],
                    ['name' => 'Malang', 'address' => 'Jl. Sudirman No. 10, Malang'],
                ];
            @endphp

            @foreach($libraries as $library)
            <div class="bg-gradient-to-tr from-white via-[#fefae0] to-white shadow-2xl rounded-xl p-6 transform hover:-translate-y-2 hover:shadow-yellow-300 transition duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-indigo-100 text-indigo-700 p-3 rounded-full mr-4 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 12.414M13.414 12.414L9.172 8.172M13.414 12.414a4 4 0 10-5.657 5.657m5.657-5.657a4 4 0 015.657 5.657M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-semibold text-[#2c3e50]">{{ $library['name'] }}</h2>
                </div>
                <p class="text-gray-700 mb-2">{{ $library['address'] }}</p>
                <p class="text-sm text-gray-500">Jam Operasional:<br><span class="font-medium text-[#1e3a8a]">Senin - Jumat, 08.00 - 16.00</span></p>
            </div>
            @endforeach
        </div>
    </section>

</body>
</html>
