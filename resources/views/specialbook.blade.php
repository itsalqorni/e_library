<x-app-layout>

    <x-slot name="header"></x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Special Book</title>

        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="bg-gray-100 p-6">
        <div class="container mx-auto">

            {{-- Section 1 --}}
            <section class="mb-12 px-6">
                <h2 class="text-4xl font-extrabold text-center text-gray-900 mb-8">Special Book</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-center">

                    {{-- Card 1 --}}
                    <div class="bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl shadow-lg p-6 w-80 mx-auto text-white transform hover:scale-105 transition duration-300">
                        <img src="{{ asset('storage/products/pergi.jpg') }}" alt="Book Image" class="w-full h-[400px] object-cover rounded">
                        <h3 class="mt-2 text-xl font-bold">Judul Buku</h3>
                        <p class="text-gray-200 mt-2">Deskripsi singkat mengenai buku ini.</p><br>
                        <a href="https://drive.google.com/file/d/1tbbJveMy5J7jCiTWA64IzRBL1_BPwhHs/view?usp=sharing" storage="_blank" class="w--full mt-6 px-5 py-3 bg-white text-red-600 font-semibold rounded-xl hover:bg-gray-200 transition duration-300">Baca</a>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-gradient-to-br from-pink-500 to-red-500 rounded-xl shadow-lg p-6 w-80 mx-auto text-white transform hover:scale-105 transition duration-300">
                        <img src="{{ asset('storage/products/pergi.jpg') }}" alt="Book Image" class="w-full h-[400px] object-cover rounded">
                        <h3 class="mt-2 text-xl font-bold">Judul Buku</h3>
                        <p class="text-gray-200 mt-2">Deskripsi singkat mengenai buku ini.</p><br>
                        <a href="https://drive.google.com/file/d/1tbbJveMy5J7jCiTWA64IzRBL1_BPwhHs/view?usp=sharing" storage="_blank" class="w--full mt-6 px-5 py-3 bg-white text-red-600 font-semibold rounded-xl hover:bg-gray-200 transition duration-300">Baca</a>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl shadow-lg p-6 w-80 mx-auto text-white transform hover:scale-105 transition duration-300">
                        <img src="{{ asset('storage/products/pergi.jpg') }}" alt="Book Image" class="w-full h-[400px] object-cover rounded">
                        <h3 class="mt-2 text-xl font-bold">Judul Buku</h3>
                        <p class="text-gray-200 mt-2">Deskripsi singkat mengenai buku ini.</p><br>
                        <a href="https://drive.google.com/file/d/1tbbJveMy5J7jCiTWA64IzRBL1_BPwhHs/view?usp=sharing" storage="_blank" class="w--full mt-6 px-5 py-3 bg-white text-red-600 font-semibold rounded-xl hover:bg-gray-200 transition duration-300">Baca</a>
                    </div>

                </div>
            </section>
            
        </div>
    </body>
    </html>

</x-app-layout>