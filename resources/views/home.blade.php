<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>E-Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'EB Garamond', serif;
        }
        .fade-in {
            animation: fadeIn 1.2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-[#fdf6e3] text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#2c3e50] p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold tracking-wide">📚 E-Library</a>
            <ul class="flex space-x-6 text-white font-medium">
                <li><a href="#" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/store" class="hover:underline">Store</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
            <div class="space-x-2">
                @auth
                    <a href="/dashboard" class="text-white px-4 py-2 bg-green-500 hover:bg-green-600 rounded">Dashboard</a>
                @else
                    <a href="/login" class="text-white px-4 py-2 bg-gray-600 hover:bg-gray-700 rounded">Login</a>
                    <a href="/register" class="text-white px-4 py-2 bg-yellow-500 hover:bg-yellow-600 rounded">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-[#fdf6e3] py-24 fade-in">
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center justify-between gap-12">
            <!-- Text Content -->
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight text-[#2c3e50]">
                    Welcome to <span class="text-yellow-600">My E-Library</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-700 mb-8">
                    "Books are windows to the world. Every page is a step toward your dream. Keep reading, keep growing."
                </p>
                <a href="{{ route('login') }}" class="inline-block px-8 py-3 bg-gradient-to-r from-blue-600 to-indigo-700 hover:from-blue-700 hover:to-indigo-800 text-white text-lg rounded-full shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    📖 Start Reading
                </a>
            </div>
    
            <!-- Image -->
            <div class="md:w-1/2 flex justify-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Library Icon" class="w-72 h-72 drop-shadow-xl hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </section>
    

    <!-- Features Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-6 text-center fade-in">
            <h2 class="text-4xl font-semibold mb-6 text-[#2c3e50]">Kenapa Memilih E-Library?</h2>
            <div class="grid md:grid-cols-3 gap-10 mt-10">
                <div class="p-6 border rounded-lg shadow hover:shadow-md transition">
                    <h3 class="text-xl font-bold mb-2">📘 Ribuan Buku</h3>
                    <p class="text-gray-600">Akses koleksi buku digital dari berbagai genre dan penulis favoritmu.</p>
                </div>
                <div class="p-6 border rounded-lg shadow hover:shadow-md transition">
                    <h3 class="text-xl font-bold mb-2">⏰ Kapan Saja</h3>
                    <p class="text-gray-600">Baca buku favoritmu kapanpun tanpa batasan waktu dan tempat.</p>
                </div>
                <div class="p-6 border rounded-lg shadow hover:shadow-md transition">
                    <h3 class="text-xl font-bold mb-2">📱 Mudah Digunakan</h3>
                    <p class="text-gray-600">Tampilan simpel dan nyaman digunakan, cocok untuk semua umur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#2c3e50] text-white py-6 mt-10 text-center">
        <p>&copy; 2025 My E-Library. All rights reserved.</p>
    </footer>

</body>
</html>
