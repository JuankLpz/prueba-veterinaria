<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Clinica Veterinaria</title>
</head>
<body>
    
<nav class="p-6 bg-red flex bg-gray-100 justify-between">
    <ul class="flex items-center">
        <li>
            <a class="p-3" href="{{ route('home')}}"> Home</a>
        </li>
        <li>
            <a class="p-3" href="{{ route('agenda')}}"> Agenda</a>
        </li>
        <li>
            <a class="p-3" href="{{ route('veterinarios')}}"> Veterinarios</a>
        </li>
    </ul>
    <ul class="flex items-center">
        @auth
            <li>
            <form action="{{route('logout')}}" method="post" class="inline"> 
                @csrf
                    <button>Logout</button>

            </form>
            </li>
        @endauth
        @guest
        <li>

            <a class="p-3" href="{{ route('register')}}"> Registro</a>
        </li>  
        <li>
            <a class="p-3" href="{{ route('login')}}"> Login</a>
        </li>
        @endguest
    </ul>
</nav>
    @yield('content')
</body>
</html>