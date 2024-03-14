@extends('layouts.app')

@section('content')
<div class="container mx-auto flex justify-center">
    <div class="max-w-lg">
        <h1 class="text-2xl font-bold  m-10">Agregar Nuevo Superhéroe</h1>

        <form action="{{ route('superheroes.store') }}" method="POST" class="max-w-lg">
            @csrf

            <div class="mb-6">
                <label for="real_name" class="block text-sm font-medium leading-6 text-slate-700">Nombre Real</label>
                <input type="text" name="real_name" id="real_name" class="mt-1 h-7 outline-2 outline-cyan-500 block w-full shadow-sm sm:text-sm rounded-md
                invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </div>


            <div class="mb-6">
                <label for="superhero_name" class="block text-sm font-medium leading-6 text-slate-700">Nombre Superhéroe</label>
                <input type="text" name="superhero_name" id="superhero_name" class="mt-1 h-7 outline-2 outline-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </div>

            <div class="mb-6">
                <label for="photo_url" class="block text-sm font-medium leading-6 text-slate-700">URL de la Foto</label>
                <input type="text" name="photo_url" id="photo_url" class="mt-1 h-7 outline-2 outline-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </div>

            <div class="mb-6">
                <label for="additional_info" class="block text-sm font-medium leading-6 text-slate-700">Información Adicional</label>
                <textarea name="additional_info" id="additional_info" rows="3" class="mt-1 outline-2 outline-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md
                invalid:border-pink-500 invalid:text-pink-600
                focus:invalid:border-pink-500 focus:invalid:ring-pink-500"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-cyan-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-cyan-700 active:bg-cyan-900 focus:outline-none focus:border-cyan-700 focus:ring ring-indigo-300 disabled:opacity-25 transition ease-in-out duration-150">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
