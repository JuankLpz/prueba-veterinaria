@extends('layouts.app')

@section('content')
<form action="{{ route('veterinarios.create')}}" method="post">  
    @csrf
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
        <div class="bg-white shadow rounded-lg p-6">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Crear Veterinario</h1>
                    <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('name') border-red-500 @enderror"
                    name="name"
                    placeholder="Nombre Completo" value="{{old('name')}}"/>
                    <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('especialidad') border-red-500 @enderror"
                    name="especialidad"
                    placeholder="Especialidad" value="{{old('especialidad')}}"/>
                    
                    
            
                        
                    <button
                    type="submit"
                    class="w-full justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >Crear</button>
                    

                </div>
        </div>
            </div>
        </div>
    </div>
</form>
    @endsection