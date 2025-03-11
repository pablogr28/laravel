<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Correo -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full bg-gray-800 text-white border border-green-500 focus:ring-2 focus:ring-green-500 dark:bg-gray-900 dark:text-white dark:border-green-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full bg-gray-800 text-white border border-green-500 focus:ring-2 focus:ring-green-500 dark:bg-gray-900 dark:text-white dark:border-green-500" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500" />
        </div>

        <!-- Recordar Contraseña -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded bg-gray-800 border-gray-700 text-green-500 shadow-sm focus:ring-green-500 dark:focus:ring-green-600" name="remember">
                <span class="ms-2 text-sm text-gray-300 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-300 hover:text-gray-100 dark:text-gray-400 dark:hover:text-gray-200" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3 bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-green-500 dark:hover:bg-green-600">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
