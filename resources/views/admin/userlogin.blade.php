<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border border-x-gray-300">No</th>
                        <th class="px-4 py-2 border border-x-gray-300">Nama</th>
                        <th class="px-4 py-2 border border-x-gray-300">Email</th>
                        <th class="px-4 py-2 border border-x-gray-300">Password</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($akunuser as $akuns)

                        @if ($akuns->usertype == "user")

                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $akuns->name }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $akuns->email }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $akuns->password }}</td>
                        </tr>

                        @endif
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>