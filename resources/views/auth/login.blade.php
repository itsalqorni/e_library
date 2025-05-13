<x-guest-layout>
    <div class="flex items-center justify-center bg-[#fdf6e3] font-serif"> {{-- min-h-screen  --}}
        <form action="{{ route('login') }}" method="post" class="bg-white border border-yellow-200 shadow-lg rounded-xl p-10 w-full max-w-md space-y-6">
            @csrf

            <!-- Judul -->
            <div class="text-center">
                <h2 class="text-3xl font-bold text-gray-800">📘 Library Login</h2>
                <p class="text-sm text-gray-500 mt-1">Access your library account</p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block font-medium text-gray-700">{{ __('Email') }}</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required autofocus autocomplete="email"
                    placeholder="example@library.com"
                    class="mt-1 block w-full bg-[#fdfaf3] border border-yellow-300 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-yellow-300"
                >
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block font-medium text-gray-700">{{ __('Password') }}</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required autocomplete="current-password"
                    placeholder="Enter your password"
                    class="mt-1 block w-full bg-[#fdfaf3] border border-yellow-300 rounded-lg shadow-sm focus:border-yellow-500 focus:ring-yellow-300"
                >
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between">
                <label class="flex items-center text-sm text-gray-700">
                    <input type="checkbox" name="remember" id="remember" class="rounded border-gray-300 text-yellow-600 shadow-sm focus:ring-yellow-500">
                    <span class="ml-2">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm text-blue-600 hover:underline" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Button -->
            <div>
                <button type="submit"
                    class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 rounded-lg shadow-md transition-all duration-200 ease-in-out">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
