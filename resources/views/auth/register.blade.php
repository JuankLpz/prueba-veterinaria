@extends('layouts.app')

@section('content')
<form action="{{ route('register')}}" method="post">  
    @csrf
    <div class="bg-grey-lighter min-h-screen flex flex-col">
        <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Registrate</h1>
                    <input 
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mb-4 @error('fullname') border-red-500 @enderror"
                    name="fullname"
                    placeholder="Nombre Completo" value="{{old('fullname')}}"/>
                    
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
                    <input 
                    type="password"
                        class="block border border-grey-light w-full p-3 rounded mb-4 @error('password_confirmation') border-red-500 @enderror"
                        name="password_confirmation"
                        placeholder="Confirmar Contraseña" />
                        
                    <button
                    type="submit"
                    class="w-full justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >Crear Cuenta</button>
                    
                    <div class="text-center text-sm text-grey-dark mt-4">
                       
                        <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                            Terminos de servicio
                        </a>
                       
                    </div>
                </div>
                
                <div class="text-grey-dark mt-6">
                    ¿Ya tienes una cuenta? 
                    <a class="no-underline border-b border-blue text-blue" href="{{ route('login')}}">
                    Log in
                </a>.
            </div>
        </div>
    </div>
</form>
    @endsection