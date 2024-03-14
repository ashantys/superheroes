@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold m-10">Detalle del Superhéroe</h1>

    <div class="bg-white rounded-lg overflow-hidden shadow-md mb-4 p-4">
        <div class="p-4">
            <strong class="block">Nombre Real</strong>
            <p>{{ $superhero->real_name }}</p>
        </div>

        <div class="p-4 border-t border-gray-200">
            <strong class="block">Nombre Superhéroe</strong>
            <p>{{ $superhero->superhero_name }}</p>
        </div>

        <div class="p-4 border-t border-gray-200">
            <strong class="block mb-4">Foto</strong>
            <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}" class="max-w-xs">
        </div>

        <div class="p-4 border-t border-gray-200">
            <strong class="block">Información Adicional:</strong>
            <p>{{ $superhero->additional_info }}</p>
        </div>
    </div>
</div>
@endsection
