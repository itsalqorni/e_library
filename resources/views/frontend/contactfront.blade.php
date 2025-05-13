<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kontak Kami | E-Library</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'EB Garamond', serif;
        }
    </style>
</head>
<body class="bg-blue-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white text-2xl font-bold">📘 E-Library</a>
            <ul class="flex space-x-6 text-white">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/books" class="hover:underline">Books</a></li>
                <li><a href="/store" class="hover:underline">Store</a></li>
                <li><a href="/contact" class="hover:underline">Contact</a></li>
            </ul>
            <div class="space-x-2">
                @auth
                    <a href="/dashboard" class="text-white px-4 py-2 bg-green-500 rounded hover:bg-green-600">Dashboard</a>
                @else
                    <a href="/login" class="text-white px-4 py-2 bg-gray-700 rounded hover:bg-gray-800">Login</a>
                    <a href="/register" class="text-white px-4 py-2 bg-yellow-500 rounded hover:bg-yellow-600">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <div class="min-h-screen flex items-center justify-center px-4 py-12">
        <div class="bg-white p-8 md:p-12 shadow-xl rounded-3xl max-w-xl w-full text-center md:text-left">
            <h2 class="text-3xl font-bold text-gray-800 mb-6">📬 Kontak Kami</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
                Ada pertanyaan, saran, atau ingin kerja sama? Kami siap membantu! Hubungi kami melalui info berikut:
            </p>

            <div class="space-y-6 text-left">
                <div class="flex items-center space-x-4">
                    <div class="text-blue-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12H8m0 0l4-4m-4 4l4 4" />
                        </svg>
                    </div>
                    <span class="text-gray-700">contact@teenagertech.id</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="text-green-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 10h11M9 21V3m5 18h5m-5 0a5 5 0 005-5V9a5 5 0 00-5-5" />
                        </svg>
                    </div>
                    <span class="text-gray-700">+62 812-3456-7890</span>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="text-red-500">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2m4-4h4m-2-2v4" />
                        </svg>
                    </div>
                    <span class="text-gray-700">Jl. Teknologi No. 10, Jakarta</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
