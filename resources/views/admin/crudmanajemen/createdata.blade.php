<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg p-8 bg-white rounded-2xl shadow-xl">
        <h2 class="mb-6 text-3xl font-bold text-center text-indigo-600">Tambah Buku</h2>

        <form action="{{ route('manajemen.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            <div class="flex flex-col">
                <label for="judulbuku" class="text-sm font-semibold text-gray-700">Judul Buku</label>
                <input type="text" name="judulbuku" id="judulbuku" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" {{-- required --}}>

                {{-- klo pengen pake error ini gak pake "required" --}}

                @error('judulbuku')
                    <div class="bg-red-500 text-white mt-2 py-2 px-4 rounded">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="flex flex-col">
                <label for="deskripsi" class="text-sm font-semibold text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" {{-- required --}}></textarea>

                {{-- klo pengen pake error ini gak pake "required" --}}

                @error('deskripsi')
                    <div class="bg-red-500 text-white mt-2 py-2 px-4 rounded">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="kodebuku" class="text-sm font-semibold text-gray-700">Kode Buku</label>
                    <input type="text" name="kodebuku" id="kodebuku" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" {{-- required --}}>

                {{-- klo pengen pake error ini gak pake "required" --}}

                @error('kodebuku')
                    <div class="bg-red-500 text-white mt-2 py-2 px-4 rounded">
                        {{ $message }}
                    </div>
                @enderror

                </div>

                <div class="flex flex-col">
                    <label for="penulis" class="text-sm font-semibold text-gray-700">Penulis</label>
                    <input type="text" name="penulis" id="penulis" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" {{-- required --}}>

                {{-- klo pengen pake error ini gak pake "required" --}}

                @error('penulis')
                    <div class="bg-red-500 text-white mt-2 py-2 px-4 rounded">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="penerbit" class="text-sm font-semibold text-gray-700">Penerbit</label>
                    <input type="text" name="penerbit" id="penerbit" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" {{-- required --}}>

                {{-- klo pengen pake error ini gak pake "required" --}}

                @error('penulis')
                    <div class="bg-red-500 text-white mt-2 py-2 px-4 rounded">
                        {{ $message }}
                    </div>
                @enderror

                </div>
                <div class="flex flex-col">
                    <label for="tahunterbit" class="text-sm font-semibold text-gray-700">Tahun Terbit</label>
                    <input type="number" name="tahunterbit" id="tahunterbit" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none" {{-- required --}}>

                {{-- klo pengen pake error ini gak pake "required" --}}

                @error('penulis')
                    <div class="bg-red-500 text-white mt-2 py-2 px-4 rounded">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>

            <div class="flex flex-col">
                <label for="image" class="text-sm font-semibold text-gray-700">Gambar Buku</label>
                <input type="file" name="image" id="image" class="px-4 py-2 mt-1 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
            </div>
            
            <button type="submit" class="w-full py-3 text-white bg-indigo-500 rounded-lg hover:bg-indigo-600 transition duration-300">Tambah Buku</button>
            <a href="{{ route('manajemen.index') }}" class="block w-full py-3 mt-3 text-center text-white bg-blue-500 rounded-lg hover:bg-blue-600 transition duration-300">Back</a>
        </form>
    </div>
</body>
</html>