@extends('layouts.app')

@section('content')
  <form action="{{ route('login')}}" method="post">  
      @csrf
      <div class="bg-grey-lighter min-h-screen flex flex-col">
          <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                @if(session('status'))
                  <div class="w-full py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                      {{session('status')}}
                  </div>
                @endif
                  <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                      <h1 class="mb-8 text-3xl text-center">Inicia sesion</h1>

                      <input 
                      type="email"
                      class="block border border-grey-light w-full p-3 rounded mb-4 @error('email') border-red-500 @enderror"
                      name="email"
                      placeholder="Email" value="{{old('email')}}"/>

                      <input 
                      type="password"
                      class="block border border-grey-light w-full p-3 rounded mb-4 @error('password') border-red-500 @enderror"
                      name="password"
                      placeholder="Contraseña" />
                      <button
                      type="submit"
                      class="w-full py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                      >Iniciar sesion</button>

                      <div class="text-center text-sm text-grey-dark mt-4">

                          <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                              Terminos de servicio
                          </a>

                      </div>
                  </div>


          </div>
      </div>
  </form>
@endsection

