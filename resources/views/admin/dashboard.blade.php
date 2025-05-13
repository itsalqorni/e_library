

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            {{ __('Baca E-book Disini') }}
        </h2>
    </x-slot>

    <!-- Grid Buku -->
    <div id="bookList" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-10">
        @foreach ($books as $book)
            <div class="bg-white p-4 rounded-lg shadow-md">
                <img src="{{ asset('storage/products/'. $book->gambarbuku) }}" alt="buku" class="w-full h-[500px] object-cover rounded"> {{-- titik untuk menggabungkan --}}
                <h3 class="text-lg font-bold mt-3 text-center">{{ $book->judulbuku }}</h3>
                <p class="text-center">"Membaca Buku Sangat Bermanfaat Untuk Menambah Ilmu-Ilmu Baru"</p>
                <div class="flex justify-center gap-4 mt-5">
                    <a href="{{ route('baca.index') ,$book->id }}" class="block text-white font-semibold hover:text-gray-300 bg-blue-500 px-4 py-2 rounded hover:bg-blue-400">Baca Disini</a>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>