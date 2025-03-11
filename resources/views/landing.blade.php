@extends('layouts.app')

@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gray-900 text-white transition-all duration-300">
    <!-- Título -->
    <h1 class="text-5xl font-bold text-center mb-4 text-green-400 hover:text-green-300 transition-colors duration-300">Bienvenido al Sistema de Jugadores</h1>
    
    <!-- Subtítulo -->
    <p class="text-lg mb-6 text-gray-300 text-center">Gestiona tu equipo de fútbol de manera fácil y rápida. ¡Haz que tu equipo sea el mejor!</p>
    
    <!-- Botón de acción -->
    <a href="{{ route('players.index') }}" class="px-6 py-3 bg-green-500 text-white rounded-full text-xl font-semibold shadow-md hover:bg-green-400 transition duration-300 transform hover:scale-105">
        Ver Jugadores
    </a>
</div>
@endsection
