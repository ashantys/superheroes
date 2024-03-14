@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-10">Lista de Superhéroes</h1>

    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <strong class="font-bold">Éxito!</strong>
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
    @endif

    <div class="flex justify-end items-center mb-4">
        <a href="{{ route('superheroes.create') }}" class="bg-cyan-500 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Agregar Nuevo Superhéroe</a>
    </div>

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Nombre Real</th>
                <th class="px-4 py-2">Nombre Superhéroe</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $superhero)
            <tr>
                <td class="border px-4 py-2">{{ $superhero->id }}</td>
                <td class="border px-4 py-2">{{ $superhero->real_name }}</td>
                <td class="border px-4 py-2">{{ $superhero->superhero_name }}</td>
                <td class="border px-4 py-2">
                    <a href="{{ route('superheroes.show', $superhero->id) }}" class="text-blue-500 hover:text-blue-700">Ver</a>
                    <a href="{{ route('superheroes.edit', $superhero->id) }}" class="text-yellow-500 hover:text-yellow-700 ml-2">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
