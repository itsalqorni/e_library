<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>E-Library</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'EB Garamond', serif;
            background-color: #0F172A; /* biru tua */
            color: #FFFFFF;
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
<body>

    <!-- Navbar -->
    <nav class="bg-[#0F172A] border-b-4 border-[#FFD700] p-5 shadow-xl">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-[#FFD700] text-4xl font-extrabold tracking-widest select-none">📘 E-Library</a>
            <ul class="hidden md:flex space-x-12 text-[#FFD700] text-lg font-semibold">
                <li><a href="/home" class="hover:text-white transition-colors">Home</a></li>
                <li><a href="/books" class="hover:text-white transition-colors">Books</a></li>
                <li><a href="/store" class="hover:text-white transition-colors">Store</a></li>
                <li><a href="/contact" class="hover:text-white transition-colors">Contact</a></li>
            </ul>
            <div class="space-x-4">
                @auth
                    <a href="/dashboard" class="text-[#0F172A] bg-[#FFD700] px-5 py-2 rounded-xl shadow-lg font-semibold hover:bg-yellow-400 transition">
                        Dashboard
                    </a>
                @else
                    <a href="/login" class="text-[#0F172A] bg-[#FFD700] px-5 py-2 rounded-xl font-semibold shadow-lg hover:bg-yellow-400 transition">
                        Login
                    </a>
                    <a href="/register" class="text-white px-5 py-2 border border-[#FFD700] rounded-xl font-semibold hover:bg-[#FFD700] hover:text-[#0F172A] transition">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="container mx-auto px-6 py-24 fade-in">
        <div class="flex flex-col md:flex-row items-center justify-between gap-16">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-6xl font-extrabold leading-tight mb-6 text-[#FFD700] drop-shadow-lg">
                    Selamat Datang di <br /><span class="text-white">My E-Library</span>
                </h1>
                <p class="text-xl text-white/90 mb-10 italic max-w-lg">
                    "Buku adalah jendela dunia, dan membaca adalah kunci untuk membukanya. Setiap halaman yang kamu baca adalah langkah kecil menuju impian besar."
                </p>
                <a href="{{ route('login') }}"
                   class="inline-block px-10 py-4 bg-gradient-to-r from-[#FFD700] to-[#E6C200] hover:from-[#E6C200] hover:to-[#FFD700] text-[#0F172A] text-xl font-bold rounded-full shadow-xl transform hover:scale-105 transition duration-300 select-none">
                    📖 Baca Sekarang
                </a>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="https://cdn-icons-png.flaticon.com/512/2232/2232688.png" alt="Books"
                     class="w-80 h-80 drop-shadow-2xl hover:scale-110 transition-transform duration-500" />
            </div>
        </div>
    </main>

</body>
</html>
