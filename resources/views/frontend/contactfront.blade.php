<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
<body class="bg-[#f8f9fa] text-gray-800">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-[#1e3a8a] to-[#0f2451] p-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <a href="/" class="text-[#FFD700] text-2xl font-bold tracking-wide">📘 E-Library</a>
      <ul class="flex space-x-6 text-white font-medium">
        <li><a href="/" class="hover:text-[#FFD700] transition">Home</a></li>
        <li><a href="/books" class="hover:text-[#FFD700] transition">Books</a></li>
        <li><a href="/store" class="hover:text-[#FFD700] transition">Store</a></li>
        <li><a href="/contact" class="hover:text-[#FFD700] transition">Contact</a></li>
      </ul>
      <div class="space-x-2">
        @auth
          <a href="/dashboard" class=" px-4 py-2 bg-[#FFD700] text-[#1e3a8a] hover:bg-yellow-400 rounded-lg shadow">Dashboard</a>
        @else
          <a href="/login" class="text-white px-4 py-2 bg-[#1e3a8a] hover:bg-[#0f2451] rounded-lg">Login</a>
          <a href="/register" class="text-[#1e3a8a] px-4 py-2 bg-[#FFD700] hover:bg-yellow-400 rounded-lg">Register</a>
        @endauth
      </div>
    </div>
  </nav>

  <!-- Contact Section -->
  <div class="min-h-screen flex items-center justify-center px-4 py-16 bg-gradient-to-b from-white via-[#f8f9fa] to-[#eaeaea]">
    <div class="bg-white/90 border border-[#FFD700] p-8 md:p-12 rounded-3xl shadow-[0_10px_40px_rgba(0,0,0,0.1)] max-w-xl w-full text-center md:text-left">
      <h2 class="text-4xl font-bold text-[#1e3a8a] mb-6 border-b-2 border-[#FFD700] inline-block">📬 Kontak Kami</h2>
      <p class="text-gray-700 mb-6 leading-relaxed">
        Ada pertanyaan, saran, atau ingin kerja sama? Kami siap membantu! Hubungi kami melalui info berikut:
      </p>

      <div class="space-y-6 text-left text-gray-800">
        <div class="flex items-center space-x-4">
          <div class="text-[#1e3a8a] bg-[#FFD700]/20 p-2 rounded-full">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M16 12H8m0 0l4-4m-4 4l4 4" />
            </svg>
          </div>
          <span class="font-medium">contact@teenagertech.id</span>
        </div>

        <div class="flex items-center space-x-4">
          <div class="text-[#1e3a8a] bg-[#FFD700]/20 p-2 rounded-full">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M3 10h11M9 21V3m5 18h5m-5 0a5 5 0 005-5V9a5 5 0 00-5-5" />
            </svg>
          </div>
          <span class="font-medium">+62 812-3456-7890</span>
        </div>

        <div class="flex items-center space-x-4">
          <div class="text-[#1e3a8a] bg-[#FFD700]/20 p-2 rounded-full">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 8h2a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2v-8a2 2 0 012-2h2m4-4h4m-2-2v4" />
            </svg>
          </div>
          <span class="font-medium">Jl. Teknologi No. 10, Jakarta</span>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
