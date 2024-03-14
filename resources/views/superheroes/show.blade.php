@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Detalle del Superhéroe</h1>

    <div class="mb-4">
        <strong class="block">Nombre Real:</strong>
        <p>{{ $superhero->real_name }}</p>
    </div>

    <div class="mb-4">
        <strong class="block">Nombre Superhéroe:</strong>
        <p>{{ $superhero->superhero_name }}</p>
    </div>

    <div class="mb-4">
        <strong class="block">Foto:</strong>
        <img src="{{ $superhero->photo_url }}" alt="{{ $superhero->superhero_name }}" class="max-w-xs">
    </div>

    <div class="mb-4">
        <strong class="block">Información Adicional:</strong>
        <p>{{ $superhero->additional_info }}</p>
    </div>
</div>
@endsection
