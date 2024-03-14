@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <h1 class="text-2xl font-bold mb-4">Editar Superhéroe</h1>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST" class="max-w-sm">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="real_name" class="block text-gray-700 font-bold mb-2">Nombre Real:</label>
            <input type="text" name="real_name" id="real_name" class="form-input" value="{{ $superhero->real_name }}">
        </div>

        <div class="mb-4">
            <label for="superhero_name" class="block text-gray-700 font-bold mb-2">Nombre Superhéroe:</label>
            <input type="text" name="superhero_name" id="superhero_name" class="form-input" value="{{ $superhero->superhero_name }}">
        </div>

        <div class="mb-4">
            <label for="photo_url" class="block text-gray-700 font-bold mb-2">URL de la Foto:</label>
            <input type="text" name="photo_url" id="photo_url" class="form-input" value="{{ $superhero->photo_url }}">
        </div>

        <div class="mb-4">
            <label for="additional_info" class="block text-gray-700 font-bold mb-2">Información Adicional:</label>
            <textarea name="additional_info" id="additional_info" class="form-textarea">{{ $superhero->additional_info }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 hover:bg
