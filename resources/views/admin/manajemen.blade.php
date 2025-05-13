<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manajemen') }}
        </h2>
    </x-slot>

    <div class="py-10 px-5 ">
        <h1 class="mb-10 font-bold text-center text-3-xl">E-Library</h1>


        {{-- tombol tambah data --}}
        <div class="mb-10 text-center">
            <a href="{{ route('manajemen.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-400">Tambah Data</a>
        </div>

        {{-- Grid Buku --}} {{-- perulangan untk bikin card baru --}}
        <div id="booklist" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($books as $book)
                <div class="bg-white p-4 w-full overflow-hidden rounded-lg shadow-md">
                    <img src="{{ asset('storage/products/'. $book->gambarbuku) }}" alt="buku" class="w-full h-auto object-cover rounded"> {{-- titik untuk menggabungkan --}}
                    <h3 class="mt-3 text-lg font-bold text-center">{{ $book->judulbuku }}</h3>
                    <p class="">{{ $book->deskripsi }}</p>

                    <div class="flex justify-center gap-4 mt-5">
                        <a href="{{ route('manajemen.edit', $book->id) }}" class="block text-white font-semibold hover:text-gray-300 bg-blue-500 px-4 py-2 rounded hover:bg-blue-400">Edit</a>
                        <form action="{{ route('manajemen.destroy', $book->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="block text-white font-semibold hover:text-gray-300 bg-red-500 px-4 py-2 rounded hover:bg-red-400">Hapus</button>
                        </form>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

    {{-- SweetAlert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    @if (session('success'))
    Swal.fire({
    icon: "success",
    title: "Yes...",
    text: "{{ session('success') }}",
    });
    @elseif (session('success'))
    Swal.fire({
    icon: "success",
    title: "Yes...",
    text: "{{ session('success') }}",
    });

    @endif
</script>

</x-app-layout>
