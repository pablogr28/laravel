<!-- resources/views/players/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Editar Jugador</h1>
    <form action="{{ route('players.update', $player) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nombre</label>
            <input type="text" name="name" class="form-control mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-600" value="{{ old('name', $player->name) }}" >
            @error('name')
                <small class="text-red-600">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="position" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Posición</label>
            <input type="text" name="position" class="form-control mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-600" value="{{ old('position', $player->position) }}" >
            @error('position')
                <small class="text-red-600">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="age" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Edad</label>
            <input type="number" name="age" class="form-control mt-1 p-2 w-full border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 dark:bg-gray-800 dark:text-gray-100 dark:border-gray-600" value="{{ old('age', $player->age) }}" >
            @error('age')
                <small class="text-red-600">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn bg-green-500 hover:bg-green-400 text-white font-semibold py-2 px-4 rounded-lg mt-3">Actualizar</button>
    </form>
</div>
@endsection
