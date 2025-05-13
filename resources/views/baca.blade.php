@php
    $books = session('books', []);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca E-Book</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @foreach ($books as $book)
    <div class="flex flex-col items-center justify-center min-h-screen p-6">
        <div class="max-w-4xl w-full bg-white shadow-lg rounded-lg p-6">
            <div class="flex justify-between items-center mb-4">
                <button id="prevPage" class="px-4 py-2 bg-blue-500 text-white rounded">Previous</button>
                <button id="toggleTheme" class="px-4 py-2 bg-gray-800 text-white rounded">Dark Mode</button>
                <button id="nextPage" class="px-4 py-2 bg-blue-500 text-white rounded">Next</button>
            </div>
            <img src="{{ asset('storage/products/'. $book->gambarbuku) }}" alt="buku" class="w-full h-auto object-cover rounded"> {{-- titik untuk menggabungkan --}}

            {{-- <iframe id="pdfViewer" class="w-full h-[500px] border rounded" src="{{ asset('storage/products/sample.pdf') }}"></iframe> --}}

            {{-- judul buku --}}
            <h1 class="text-3xl font-bold mt-3 text-center">{{ $book->judulbuku }}</h1>

            {{-- info buku --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="">
                    <p class="text-sm text-gray-500">Penulis :</p>
                    <p class="text-lg font-medium">{{ $book->detailmanajemen->penulis ?? '-' }}</p>
                </div>
                <div class="">
                    <p class="text-sm text-gray-500">Penerbit :</p>
                    <p class="text-lg font-medium">{{ $book->detailmanajemen->penerbit ?? '-' }}</p>
                </div>
                <div class="">
                    <p class="text-sm text-gray-500">Tahun Terbit :</p>
                    <p class="text-lg font-medium">{{ $book->detailmanajemen->Tahun_terbit ?? '-' }}</p>
                </div>
            </div>

            {{-- deskripsi buku --}}
            <div class="mt-4">
                <p class="text-sm text-gray-500">ISI Buku:</p>
                <p class="text-lg font-medium">{{ $book->detailmanajemen->deskripsi ?? '-' }}</p>
            </div>

            {{-- tombol balek --}}
            @if (Auth::user()->usertype === 'admin')
                <a href="{{ Route('admin.dashboard') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-400"></a>
            @else 
                <a href="{{ Route('dashboard') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-400"></a>
            @endif

        </div>
    </div>
    @endforeach

    <script>
        const toggleTheme = document.getElementById("toggleTheme");
        const body = document.body;

        toggleTheme.addEventListener("click", () => {
            body.classList.toggle("bg-gray-900");
            body.classList.toggle("text-white");
        });
    </script>
</body>
</html>