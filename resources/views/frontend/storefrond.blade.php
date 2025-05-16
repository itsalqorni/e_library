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
<body class="bg-[#0f172a] text-white">

    <!-- Navbar -->
    <nav class="bg-[#1e3a8a] p-4 shadow-lg border-b-4 border-[#facc15]">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-[#facc15] text-2xl font-extrabold tracking-wide">📘 E-Library</a>
            <ul class="flex space-x-6 text-white font-semibold">
                <li><a href="/" class="hover:text-[#facc15] transition">Home</a></li>
                <li><a href="/books" class="hover:text-[#facc15] transition">Books</a></li>
                <li><a href="/store" class="hover:text-[#facc15] transition">Store</a></li>
                <li><a href="/contact" class="hover:text-[#facc15] transition">Contact</a></li>
            </ul>
            <div class="space-x-2">
                @auth
                    <a href="/dashboard" class="text-[#0f172a] bg-[#facc15] px-4 py-2 rounded-lg font-semibold shadow-md hover:bg-yellow-400 transition">Dashboard</a>
                @else
                    <a href="/login" class="text-white border border-[#facc15] px-4 py-2 rounded-lg hover:bg-[#facc15] hover:text-[#0f172a] transition">Login</a>
                    <a href="/register" class="bg-[#facc15] text-[#0f172a] px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400 transition">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Store Page -->
    <section class="container mx-auto px-6 py-16">
        <h1 class="text-4xl font-extrabold text-center mb-12 text-[#facc15] drop-shadow-lg">📍 Our Library Locations</h1>

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
            <div class="bg-[#1e293b] border border-[#facc15] shadow-xl rounded-2xl p-6 hover:shadow-yellow-300 transform hover:-translate-y-2 transition duration-300">
                <div class="flex items-center mb-4">
                    <div class="bg-[#facc15] text-[#0f172a] p-3 rounded-full mr-4 shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 12.414M13.414 12.414L9.172 8.172M13.414 12.414a4 4 0 10-5.657 5.657m5.657-5.657a4 4 0 015.657 5.657M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h2 class="text-xl font-bold text-[#facc15]">{{ $library['name'] }}</h2>
                </div>
                <p class="text-gray-300 mb-2">{{ $library['address'] }}</p>
                <p class="text-sm text-gray-400">Jam Operasional:<br><span class="font-medium text-[#facc15]">Senin - Jumat, 08.00 - 16.00</span></p>
            </div>
            @endforeach
        </div>
    </section>

</body>
</html>
