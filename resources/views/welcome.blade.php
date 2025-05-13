<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body class="bg-[#fefae0] text-gray-800">

    <!-- Navbar -->
    <nav class="bg-[#1e3a8a] p-4 shadow-xl">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-3xl font-bold tracking-widest">📘 E-Library</a>
            <ul class="hidden md:flex space-x-8 text-white text-lg">
                <li><a href="/home" class="hover:underline hover:text-yellow-400 transition">Home</a></li>
                <li><a href="/books" class="hover:underline hover:text-yellow-400 transition">Books</a></li>
                <li><a href="/store" class="hover:underline hover:text-yellow-400 transition">Store</a></li>
                <li><a href="/contact" class="hover:underline hover:text-yellow-400 transition">Contact</a></li>
            </ul>
            <div class="space-x-2">
                @auth
                    <a href="/dashboard" class="text-white px-4 py-2 bg-green-500 hover:bg-green-600 rounded-xl shadow-md transition">Dashboard</a>
                @else
                    <a href="/login" class="text-white px-4 py-2 bg-gray-700 hover:bg-gray-800 rounded-xl transition">Login</a>
                    <a href="/register" class="text-white px-4 py-2 bg-yellow-500 hover:bg-yellow-600 rounded-xl transition">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="container mx-auto px-6 py-20 fade-in">
        <div class="flex flex-col md:flex-row items-center justify-between gap-14">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-5xl font-bold leading-tight mb-6 text-[#1e3a8a]">
                    Selamat Datang di <span class="text-yellow-600">My E-Library</span>
                </h1>
                <p class="text-lg text-gray-700 mb-8">
                    "Buku adalah jendela dunia, dan membaca adalah kunci untuk membukanya. Setiap halaman yang kamu baca adalah langkah kecil menuju impian besar."
                </p>
                <a href="{{ route('login') }}"
                   class="inline-block px-8 py-3 bg-gradient-to-r from-[#1e3a8a] to-[#4338ca] hover:from-[#3746bd] hover:to-[#5145cd] text-white text-lg rounded-full shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    📖 Baca Sekarang
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Books"
                     class="w-72 h-72 drop-shadow-xl hover:scale-105 transition-transform duration-500">
            </div>
        </div>
    </div>

</body>
</html>
