<x-app-layout>

    <x-slot name="header"></x-slot>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Special Book</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-[#0F172A] p-8 min-h-screen text-white">
        <div class="container mx-auto">

            {{-- Section 1 --}}
            <section class="mb-16 px-6">
                <h2 class="text-5xl font-extrabold text-center text-[#FFD700] mb-12 tracking-widest drop-shadow-lg">
                    Special Book
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 justify-center">

                    {{-- Card 1 --}}
                    <div class="bg-gradient-to-br from-[#FFD700]/70 to-[#D4AF37]/90 rounded-3xl shadow-2xl p-6 w-80 mx-auto text-[#0F172A] hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('storage/products/pergi.jpg') }}" alt="Book Image" class="w-full h-[400px] object-cover rounded-2xl shadow-md" />
                        <h3 class="mt-5 text-2xl font-bold tracking-wide">Judul Buku</h3>
                        <p class="text-[#1a1a1a] mt-3 leading-relaxed">
                            Deskripsi singkat mengenai buku ini.
                        </p>
                        <a href="https://drive.google.com/file/d/1tbbJveMy5J7jCiTWA64IzRBL1_BPwhHs/view?usp=sharing" target="_blank" 
                           class="block mt-8 px-6 py-3 bg-[#0F172A] text-[#FFD700] font-semibold rounded-xl text-center shadow-md hover:bg-[#1c2b48] hover:shadow-lg transition duration-300">
                            Baca
                        </a>
                    </div>

                    {{-- Card 2 --}}
                    <div class="bg-gradient-to-br from-[#FFD700]/70 to-[#D4AF37]/90 rounded-3xl shadow-2xl p-6 w-80 mx-auto text-[#0F172A] hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('storage/products/pergi.jpg') }}" alt="Book Image" class="w-full h-[400px] object-cover rounded-2xl shadow-md" />
                        <h3 class="mt-5 text-2xl font-bold tracking-wide">Judul Buku</h3>
                        <p class="text-[#1a1a1a] mt-3 leading-relaxed">
                            Deskripsi singkat mengenai buku ini.
                        </p>
                        <a href="https://drive.google.com/file/d/1tbbJveMy5J7jCiTWA64IzRBL1_BPwhHs/view?usp=sharing" target="_blank" 
                           class="block mt-8 px-6 py-3 bg-[#0F172A] text-[#FFD700] font-semibold rounded-xl text-center shadow-md hover:bg-[#1c2b48] hover:shadow-lg transition duration-300">
                            Baca
                        </a>
                    </div>

                    {{-- Card 3 --}}
                    <div class="bg-gradient-to-br from-[#FFD700]/70 to-[#D4AF37]/90 rounded-3xl shadow-2xl p-6 w-80 mx-auto text-[#0F172A] hover:scale-105 transition-transform duration-300 cursor-pointer">
                        <img src="{{ asset('storage/products/pergi.jpg') }}" alt="Book Image" class="w-full h-[400px] object-cover rounded-2xl shadow-md" />
                        <h3 class="mt-5 text-2xl font-bold tracking-wide">Judul Buku</h3>
                        <p class="text-[#1a1a1a] mt-3 leading-relaxed">
                            Deskripsi singkat mengenai buku ini.
                        </p>
                        <a href="https://drive.google.com/file/d/1tbbJveMy5J7jCiTWA64IzRBL1_BPwhHs/view?usp=sharing" target="_blank" 
                           class="block mt-8 px-6 py-3 bg-[#0F172A] text-[#FFD700] font-semibold rounded-xl text-center shadow-md hover:bg-[#1c2b48] hover:shadow-lg transition duration-300">
                            Baca
                        </a>
                    </div>

                </div>
            </section>

        </div>
    </body>
    </html>

</x-app-layout>
