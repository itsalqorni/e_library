<x-guest-layout>
    <div class="flex items-center justify-center bg-[#FFD700] font-serif px-4">
        <form action="{{ route('login') }}" method="post"
              class="bg-white bg-opacity-90 border border-[#FFD700]/60 shadow-2xl rounded-3xl p-10 w-full max-w-md space-y-7
                     backdrop-blur-sm"
        >
            @csrf

            <!-- Judul -->
            <div class="text-center">
                <h2 class="text-3xl font-extrabold drop-shadow-md text-[#1e3a8a]  tracking-wider">
                    📘 Library Login
                </h2>
                <p class="text-sm text-[#1e3a8a] mt-2 font-semibold">
                    Access your library account
                </p>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block font-semibold text-[#1e3a8a] mb-1">{{ __('Email') }}</label>
                <input
                    id="email"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required autofocus autocomplete="email"
                    placeholder="example@library.com"
                    class="mt-1 block w-full rounded-xl border-2 border-[#FFD700] bg-white text-[#1e3a8a] 
                           shadow-md placeholder-[#999] focus:border-[#1e3a8a] focus:ring-2 focus:ring-[#1e3a8a]/50 transition"
                >
            </div>

            <!-- Password -->
            <div>
                <label for="password" class="block font-semibold text-[#1e3a8a] mb-1">{{ __('Password') }}</label>
                <input
                    id="password"
                    type="password"
                    name="password"
                    required autocomplete="current-password"
                    placeholder="Enter your password"
                    class="mt-1 block w-full rounded-xl border-2 border-[#FFD700] bg-white text-[#1e3a8a] 
                           shadow-md placeholder-[#999] focus:border-[#1e3a8a] focus:ring-2 focus:ring-[#1e3a8a]/50 transition"
                >
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center text-[#1e3a8a] font-medium">
                    <input type="checkbox" name="remember" id="remember"
                           class="rounded border-[#FFD700] text-[#FFD700] shadow-sm focus:ring-[#FFD700]">
                    <span class="ml-2 select-none"> {{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-[#1e3a8a] font-semibold hover:text-[#FFD700] hover:underline transition"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Button -->
            <div>
                <button type="submit"
                        class="w-full bg-[#FFD700] hover:bg-yellow-400 text-[#1e3a8a] font-extrabold py-3 rounded-2xl
                               shadow-lg transition duration-300 ease-in-out focus:outline-none focus:ring-4 focus:ring-[#1e3a8a]/50"
                >
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>
</x-guest-layout>
