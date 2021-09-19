@extends('layouts.app')

@section('content')


<div id="menu" class="container mx-auto px-4 lg:pt-24 lg:pb-64">
      <div class="flex flex-wrap text-center justify-center">
        <div class="w-full lg:w-6/12 px-4">
          <h2 class="text-4xl font-semibold text-black">Agenda</h2>
          <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-500">
            En esta seccion puede ver las citas creadas actualmente
          </p>
        </div>

      <div class="justify-left">
                <a  href="{{route('agenda.create')}}" class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Crear</a>
            </div>
      </div>
      @foreach ($citas as $cita)
      <div class="flex flex-wrap mt-12 justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 gap-4">
          <div class="col-span-2 sm:col-span-1 xl:col-span-1">
            <img
            alt="..."
            src="https://i.pinimg.com/550x/ed/5f/3a/ed5f3a15d92ba3ac6238a98da42bb01e.jpg"
            class="h-24 w-24 rounded  mx-auto"
            />
          </div>
          <div class="col-span-2 sm:col-span-4 xl:col-span-4">
            <h3 class="font-semibold text-black">{{$cita->date}}</h3>
            <p>
              Cita agendada con el meedico {{$cita->veterinario->name}}.
            </p>
          </div>
          <div class="col-span-2 sm:col-span-1 xl:col-span-1 italic ">
          <a href="#" class="bg-white text-gray-800 font-bold rounded border-b-2 border-yellow-500 hover:border-yellow-600 hover:bg-yellow-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"> Editar</a>
          </div>
        </div>
        @endforeach
    </div>
@endsection

