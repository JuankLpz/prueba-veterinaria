@extends('layouts.app')

@section('content')
<form action="{{ route('agenda.create')}}" method="post">  
    @csrf
            <div class="bg-grey-lighter min-h-screen flex flex-col">
                    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                    <div class="bg-white shadow rounded-lg p-6">
                    <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                            <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                                <h1 class="mb-8 text-3xl text-center">Crear Cita</h1>
                    <div
                    class="flatpickr container mx-auto col-span-6 sm:col-span-6 mt-5">           
                    <label for="datetime" class="flex-grow  block font-medium text-sm text-gray-700 mb-1">Fecha y Hora</label>
                    <div class="flex align-middle align-content-center">
                       
                        <input
                            type="date"
                            name="date"
                            placeholder="Select.."
                            class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">
                            <input
                            type="time"
                            name="time"
                            placeholder="Select.."
                            class="block w-full px-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-l-md shadow-sm">
                    </div>
                    
            </div>
                    <br>
                    <label>Veterinario</label>
            <select name="veterinario">
                @foreach($veterinarios as $veterinario)
                <option value="{{$veterinario->id}}" >
                        {{$veterinario->name}}
                </option>
                @endforeach
            </select>
            <label>Descripcion</label>
                    <textarea 
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('descripcion') border-red-500 @enderror"
                    name="descripcion"
                    placeholder="Descripcion" value="{{old('descripcion')}}"></textarea>
            <br>
            <br>
                
            <button type="submit"
                class="w-full justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Crear
            </button>
                    
                </div>
             </div>
            </div>
        </div>
    </div>
</form>
    @endsection