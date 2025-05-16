<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center bg-[#f5f5f5] font-serif px-4">
        <div class="bg-[#1e3a8a] bg-opacity-20 shadow-2xl rounded-3xl p-10 max-w-lg w-full border border-[#FFD700]/60"
             style="box-shadow: 6px 6px 10px rgba(0,0,0,0.1);">
             
            <h2 class="text-3xl font-extrabold text-center text-[#FFD700] mb-8 tracking-wide drop-shadow-md">
                📖 Library Account Registration
            </h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Full Name')" class="text-[#FFD700]" />
                    <x-text-input
                        id="name"
                        class="block mt-1 w-full rounded-xl border border-[#FFD700]/70 bg-white text-[#1e3a8a]
                               focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]/50 transition"
                        type="text"
                        name="name"
                        placeholder="e.g. Jane Austen"
                        :value="old('name')"
                        required autofocus autocomplete="name"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-sm text-[#FFD700]" />
                </div>

                <!-- Email -->
                <div>
                    <x-input-label for="email" :value="__('Email Address')" class="text-[#FFD700]" />
                    <x-text-input
                        id="email"
                        class="block mt-1 w-full rounded-xl border border-[#FFD700]/70 bg-white text-[#1e3a8a]
                               focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]/50 transition"
                        type="email"
                        name="email"
                        placeholder="e.g. jane@library.com"
                        :value="old('email')"
                        required autocomplete="username"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-[#FFD700]" />
                </div>

                <!-- Password -->
                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-[#FFD700]" />
                    <x-text-input
                        id="password"
                        class="block mt-1 w-full rounded-xl border border-[#FFD700]/70 bg-white text-[#1e3a8a]
                               focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]/50 transition"
                        type="password"
                        name="password"
                        required autocomplete="new-password"
                        placeholder="Create a password"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-[#FFD700]" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-[#FFD700]" />
                    <x-text-input
                        id="password_confirmation"
                        class="block mt-1 w-full rounded-xl border border-[#FFD700]/70 bg-white text-[#1e3a8a]
                               focus:border-[#FFD700] focus:ring-2 focus:ring-[#FFD700]/50 transition"
                        type="password"
                        name="password_confirmation"
                        required autocomplete="new-password"
                        placeholder="Repeat your password"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-sm text-[#FFD700]" />
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center justify-between mt-8">
                    <a class="text-sm text-[#1e3a8a] hover:underline hover:text-[#FFD700]" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-primary-button class="bg-[#FFD700] hover:bg-yellow-400 border border-[#1e3a8a] text-[#1e3a8a] px-6 py-3 rounded-xl font-semibold shadow-md
                                         transition focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#1e3a8a]">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
