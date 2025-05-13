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

        {{-- isi halaman Book --}}
        <div class="min-h-screen p-6 bg-gray-100">
            <div class="bg-white shadow-md oferflow-x-auto rounded-2xl">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50"></thead>
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gambar
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Buku
                            </th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td class="px-6 py-3">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-3">
                                    <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="bambar Buku" class="w-16 h-16 rounded-md">
                                </td>
                                <td class="px-6 py-3">
                                    {{ $book->judulbuku }}
                                </td>
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
 
</body>
</html>
