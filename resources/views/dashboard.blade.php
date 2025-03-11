<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-lg p-8 shadow-lg text-white">
                <div class="text-center">
                    <h3 class="text-2xl font-semibold">{{ __('Welcome to Your Dashboard,') }} <span class="font-bold text-lg">{{ Auth::user()->name }}</span>!</h3>
                    <p class="mt-4">{{ __("You're logged in and ready to manage your players.") }}</p>
                </div>

                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-200">
                        <h4 class="font-semibold text-xl mb-2">View Players</h4>
                        <p class="text-gray-700 dark:text-gray-300">See all registered players in the system</p>
                        <a href="{{ route('players.index') }}" class="text-indigo-600 hover:text-indigo-800">View Players</a>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-md hover:shadow-xl transition duration-200">
                        <h4 class="font-semibold text-xl mb-2">Add Player</h4>
                        <p class="text-gray-700 dark:text-gray-300">Add a new player to the system</p>
                        <a href="{{ route('players.create') }}" class="text-indigo-600 hover:text-indigo-800">Add Player</a>
                    </div>

                    
                </div>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
