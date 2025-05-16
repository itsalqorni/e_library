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
<body class="bg-[#0F172A] text-white">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-[#0a1128] to-[#0f172a] p-5 shadow-lg border-b-4 border-[#FFD700]">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-[#FFD700] text-3xl font-extrabold tracking-widest drop-shadow-lg">📚 E-Library</a>
            <ul class="flex space-x-8 text-[#FFD700] font-semibold uppercase tracking-wide">
                <li><a href="#" class="hover:text-white transition">Home</a></li>
                <li><a href="/books" class="hover:text-white transition">Books</a></li>
                <li><a href="/store" class="hover:text-white transition">Store</a></li>
                <li><a href="/contact" class="hover:text-white transition">Contact</a></li>
            </ul>
            <div class="space-x-4">
                @auth
                    <a href="/dashboard" class="px-5 py-2 bg-[#FFD700] text-[#0F172A] font-semibold rounded-lg shadow hover:bg-yellow-400 transition">Dashboard</a>
                @else
                    <a href="/login" class="px-5 py-2 border-2 border-[#FFD700] text-[#FFD700] rounded-lg font-semibold hover:bg-[#FFD700] hover:text-[#0F172A] transition">Login</a>
                    <a href="/register" class="px-5 py-2 bg-[#FFD700] text-[#0F172A] font-semibold rounded-lg shadow hover:bg-yellow-400 transition">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-[#0F172A] py-24 fade-in">
        <div class="container mx-auto px-6 flex flex-col-reverse md:flex-row items-center justify-between gap-16">
            <!-- Text Content -->
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-6xl font-extrabold mb-8 leading-tight tracking-wide drop-shadow-lg">
                    Welcome to <span class="text-[#FFD700]">My E-Library</span>
                </h1>
                <p class="text-xl text-[#e0dede] mb-10 max-w-lg">
                    "Books are windows to the world. Every page is a step toward your dream. Keep reading, keep growing."
                </p>
                <a href="{{ route('login') }}" class="inline-block px-10 py-4 bg-gradient-to-r from-[#FFD700] to-yellow-400 text-[#0F172A] font-extrabold rounded-full shadow-xl hover:from-yellow-400 hover:to-[#FFD700] hover:scale-105 transform transition-all duration-300">
                    📖 Start Reading
                </a>
            </div>
    
            <!-- Image -->
            <div class="md:w-1/2 flex justify-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Library Icon" class="w-80 h-80 drop-shadow-2xl hover:scale-110 transition-transform duration-500" />
            </div>
        </div>
    </section>
    

    <!-- Features Section -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6 text-center fade-in">
            <h2 class="text-5xl font-extrabold mb-10 text-[#0F172A] tracking-wide">Kenapa Memilih E-Library?</h2>
            <div class="grid md:grid-cols-3 gap-14 mt-12">
                <div class="p-8 border-2 border-[#FFD700] rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <h3 class="text-2xl font-bold mb-4 text-[#0F172A] flex items-center justify-center gap-3">
                        <span>📘</span> Ribuan Buku
                    </h3>
                    <p class="text-[#4a4a4a]">Akses koleksi buku digital dari berbagai genre dan penulis favoritmu.</p>
                </div>
                <div class="p-8 border-2 border-[#FFD700] rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <h3 class="text-2xl font-bold mb-4 text-[#0F172A] flex items-center justify-center gap-3">
                        <span>⏰</span> Kapan Saja
                    </h3>
                    <p class="text-[#4a4a4a]">Baca buku favoritmu kapanpun tanpa batasan waktu dan tempat.</p>
                </div>
                <div class="p-8 border-2 border-[#FFD700] rounded-2xl shadow-lg hover:shadow-2xl transition cursor-pointer">
                    <h3 class="text-2xl font-bold mb-4 text-[#0F172A] flex items-center justify-center gap-3">
                        <span>📱</span> Mudah Digunakan
                    </h3>
                    <p class="text-[#4a4a4a]">Tampilan simpel dan nyaman digunakan, cocok untuk semua umur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-[#0a1128] to-[#0f172a] text-[#FFD700] py-6 mt-16 text-center font-semibold tracking-wide border-t-4 border-[#FFD700]">
        <p>&copy; 2025 My E-Library. All rights reserved.</p>
    </footer>

</body>
</html>
