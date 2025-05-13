<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#fdf6e3] font-serif">
        <div class="bg-white shadow-xl rounded-lg p-10 w-full max-w-lg border border-yellow-300" style="box-shadow: 4px 4px #e5e5e5;">
            <h2 class="text-3xl font-bold text-center text-[#3e3e3e] mb-6">📖 Library Account Registration</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Full Name')" />
                    <x-text-input
                        id="name"
                        class="block mt-1 w-full border border-yellow-200 bg-[#fdfaf3] focus:border-yellow-400 focus:ring-0"
                        type="text"
                        name="name"
                        placeholder="e.g. Jane Austen"
                        :value="old('name')"
                        required autofocus autocomplete="name"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email Address')" />
                    <x-text-input
                        id="email"
                        class="block mt-1 w-full border border-yellow-200 bg-[#fdfaf3] focus:border-yellow-400 focus:ring-0"
                        type="email"
                        name="email"
                        placeholder="e.g. jane@library.com"
                        :value="old('email')"
                        required autocomplete="username"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input
                        id="password"
                        class="block mt-1 w-full border border-yellow-200 bg-[#fdfaf3] focus:border-yellow-400 focus:ring-0"
                        type="password"
                        name="password"
                        required autocomplete="new-password"
                        placeholder="Create a password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input
                        id="password_confirmation"
                        class="block mt-1 w-full border border-yellow-200 bg-[#fdfaf3] focus:border-yellow-400 focus:ring-0"
                        type="password"
                        name="password_confirmation"
                        required autocomplete="new-password"
                        placeholder="Repeat your password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-red-500" />
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-between mt-6">
                    <a class="text-sm text-gray-600 hover:underline hover:text-yellow-800" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="bg-yellow-600 hover:bg-yellow-700 border border-yellow-800 text-white px-6 py-2 rounded-md transition">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
