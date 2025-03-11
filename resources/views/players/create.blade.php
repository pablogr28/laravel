<!-- resources/views/players/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-3xl font-bold mb-6 text-white">Crear Jugador</h1>
    <form action="{{ route('players.store') }}" method="POST" class="space-y-4">
        @csrf
        <div class="form-group">
            <label for="name" class="block text-gray-300 font-semibold">Nombre</label>
            <input type="text" name="name" class="w-full p-2 border border-gray-600 bg-gray-800 text-white rounded-lg" value="{{ old('name') }}">
            @error('name')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="position" class="block text-gray-300 font-semibold">Posición</label>
            <input type="text" name="position" class="w-full p-2 border border-gray-600 bg-gray-800 text-white rounded-lg" value="{{ old('position') }}">
            @error('position')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="age" class="block text-gray-300 font-semibold">Edad</label>
            <input type="number" name="age" class="w-full p-2 border border-gray-600 bg-gray-800 text-white rounded-lg" value="{{ old('age') }}">
            @error('age')
                <small class="text-red-500">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="w-full bg-green-600 text-white p-3 rounded-lg mt-4 hover:bg-green-700 focus:outline-none">Guardar</button>
    </form>
</div>
@endsection
