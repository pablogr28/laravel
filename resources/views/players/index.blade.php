@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold text-center text-gray-800 dark:text-gray-100 mb-6">Lista de Jugadores</h1>

    <div class="text-center mb-4">
        <a href="{{ route('players.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-lg shadow-lg transition duration-300">Añadir Jugador</a>
    </div>

    <div class="overflow-x-auto bg-white shadow-lg rounded-lg dark:bg-gray-800">
        <table class="table-auto w-full border-collapse">
            <thead class="bg-green-500 text-white dark:bg-green-700">
                <tr>
                    <th class="px-4 py-2 border-b text-left">Nombre</th>
                    <th class="px-4 py-2 border-b text-left">Posición</th>
                    <th class="px-4 py-2 border-b text-left">Edad</th>
                    <th class="px-4 py-2 border-b text-left">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 dark:text-gray-300">
                @foreach($players as $player)
                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition duration-200">
                    <td class="px-4 py-2 border-b">{{ $player->name }}</td>
                    <td class="px-4 py-2 border-b">{{ $player->position }}</td>
                    <td class="px-4 py-2 border-b">{{ $player->age }}</td>
                    <td class="px-4 py-2 border-b">
                        <a href="{{ route('players.edit', $player) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-4 rounded-lg shadow-md transition duration-300 mr-2">Editar</a>
                        <form action="{{ route('players.destroy', $player) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-4 rounded-lg shadow-md transition duration-300">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
