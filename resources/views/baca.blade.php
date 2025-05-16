@php
    $books = session('books', []);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Baca E-Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0F172A] text-white">

    @foreach ($books as $book)
    <div class="flex flex-col items-center justify-center min-h-screen p-6">
        <div class="max-w-4xl w-full bg-gradient-to-br from-[#1e293b] to-[#0f172a] rounded-3xl shadow-2xl p-8 border border-yellow-400">
            <div class="flex justify-between items-center mb-6">
                <button id="prevPage" class="px-5 py-2 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#0F172A] font-semibold rounded-lg shadow-lg hover:from-yellow-500 hover:to-yellow-600 transition transform hover:scale-105">
                    Previous
                </button>
                <button id="toggleTheme" class="px-5 py-2 bg-yellow-400 text-[#0F172A] font-semibold rounded-lg shadow-lg hover:bg-yellow-300 transition transform hover:scale-105">
                    Toggle Theme
                </button>
                <button id="nextPage" class="px-5 py-2 bg-gradient-to-r from-yellow-400 to-yellow-500 text-[#0F172A] font-semibold rounded-lg shadow-lg hover:from-yellow-500 hover:to-yellow-600 transition transform hover:scale-105">
                    Next
                </button>
            </div>

            <img src="{{ asset('storage/products/'. $book->gambarbuku) }}" alt="buku" class="w-full h-[520px] object-cover rounded-2xl shadow-xl mb-8 border-4 border-yellow-400" />

            <h1 class="text-4xl font-serif font-extrabold text-yellow-400 text-center mb-6 drop-shadow-lg">{{ $book->judulbuku }}</h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center mb-8">
                <div>
                    <p class="text-yellow-300 uppercase text-sm tracking-widest mb-1">Penulis</p>
                    <p class="text-white font-semibold text-lg">{{ $book->detailmanajemen->penulis ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-yellow-300 uppercase text-sm tracking-widest mb-1">Penerbit</p>
                    <p class="text-white font-semibold text-lg">{{ $book->detailmanajemen->penerbit ?? '-' }}</p>
                </div>
                <div>
                    <p class="text-yellow-300 uppercase text-sm tracking-widest mb-1">Tahun Terbit</p>
                    <p class="text-white font-semibold text-lg">{{ $book->detailmanajemen->Tahun_terbit ?? '-' }}</p>
                </div>
            </div>

            <div>
                <p class="text-yellow-300 uppercase text-sm tracking-widest mb-2">Isi Buku</p>
                <p class="text-white leading-relaxed text-lg font-serif">{{ $book->detailmanajemen->deskripsi ?? '-' }}</p>
            </div>

            <div class="mt-10 text-center">
                @if (Auth::user()->usertype === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="inline-block bg-yellow-400 text-[#0F172A] px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-yellow-300 transition transform hover:scale-105">
                        Kembali ke Dashboard Admin
                    </a>
                @else 
                    <a href="{{ route('dashboard') }}" class="inline-block bg-yellow-400 text-[#0F172A] px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-yellow-300 transition transform hover:scale-105">
                        Kembali ke Dashboard
                    </a>
                @endif
            </div>
        </div>
    </div>
    @endforeach

    <script>
        const toggleTheme = document.getElementById("toggleTheme");
        const body = document.body;

        toggleTheme.addEventListener("click", () => {
            body.classList.toggle("bg-[#0F172A]");
            body.classList.toggle("bg-white");
            body.classList.toggle("text-white");
            body.classList.toggle("text-[#0F172A]");
        });
    </script>
</body>
</html>
