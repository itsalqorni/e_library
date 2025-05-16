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
      <a href="/" class="text-[#FFD700] text-3xl font-bold tracking-widest select-none">📘 E-Library</a>
      <ul class="hidden md:flex space-x-8 text-[#f9f9f9] text-lg font-semibold">
        <li><a href="/home" class="hover:text-[#FFD700] transition-colors duration-300">Home</a></li>
        <li><a href="/books" class="hover:text-[#FFD700] transition-colors duration-300">Books</a></li>
        <li><a href="/store" class="hover:text-[#FFD700] transition-colors duration-300">Store</a></li>
        <li><a href="/contact" class="hover:text-[#FFD700] transition-colors duration-300">Contact</a></li>
      </ul>
      <div class="space-x-2">
        @auth
          <a href="/dashboard" class="text-[#1e3a8a] px-4 py-2 bg-[#FFD700] hover:bg-yellow-400 rounded-xl shadow-md transition duration-300">Dashboard</a>
        @else
          <a href="/login" class="text-[#FFD700] px-4 py-2 border border-[#FFD700] hover:bg-[#FFD700] hover:text-[#1e3a8a] rounded-xl transition duration-300">Login</a>
          <a href="/register" class="text-[#1e3a8a] px-4 py-2 bg-[#FFD700] hover:bg-yellow-400 rounded-xl shadow-md transition duration-300">Register</a>
        @endauth
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="min-h-screen p-6 bg-[#f7f5e6]">
    <div class="bg-white shadow-lg overflow-x-auto rounded-3xl border border-[#FFD700]/50">
      <table class="min-w-full text-gray-800 text-left text-base font-medium">
        <thead class="bg-[#1e3a8a] text-[#FFD700] uppercase tracking-wider">
          <tr>
            <th scope="col" class="px-6 py-4">No</th>
            <th scope="col" class="px-6 py-4">Gambar</th>
            <th scope="col" class="px-6 py-4">Nama Buku</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($books as $book)
            <tr class="border-b border-[#1e3a8a]/30 hover:bg-[#FFD700]/20 transition-colors duration-300">
              <td class="px-6 py-4">{{ $loop->iteration }}</td>
              <td class="px-6 py-4">
                <img src="{{ asset('storage/products/' . $book->gambarbuku) }}" alt="gambar Buku" class="w-16 h-16 rounded-md object-cover" />
              </td>
              <td class="px-6 py-4">{{ $book->judulbuku }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
