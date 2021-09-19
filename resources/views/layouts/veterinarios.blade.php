@extends('layouts.app')

@section('content')

    <div class="bg-gray-50 min-h-screen flex items-center justify-center px-16">
        <div class="relative w-full max-w-lg">
            <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob "></div>
            <div class="absolute top-0 -right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-32 left-20 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
            <div>
                <a  href="{{route('veterinarios.create')}}" class="bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Crear</a>
            </div>
            <div class="m-8 relative space-y-4">
                @foreach ($veterinarios as $veterinario)
                <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
                    <div class="flex-1 flex justify-between items-center">
        
                        <div class="h-30 w-48 bg-gray-100 rounded"><span> {{$veterinario->name}}</span></div>
                        <div >
                            
                               <a href="{{route('veterinarios.edit',$veterinario)}}" class="bg-white text-gray-800 font-bold rounded border-b-2 border-yellow-500 hover:border-yellow-600 hover:bg-yellow-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center"> Editar</a>
                            
                        </div>
                        <div >
                            <form action="{{route('veterinarios.destroy', $veterinario)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-white text-gray-800 font-bold rounded border-b-2 border-red-500 hover:border-red-600 hover:bg-red-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">
                                Borrar
                            </button>

                            </form>
     
                        </div>

                    </div>
                </div>
                @endforeach
     
    </div>
  </div>
</div>
{{$veterinarios->links()}}
@endsection

