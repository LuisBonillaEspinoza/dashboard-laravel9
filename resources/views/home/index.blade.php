<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>

    {{-- Si estas logueado --}}
    @auth
    {{-- Obtener datos del usuario logueado auth()->user->fila de la tabla --}}
        <p>Bienvenido {{ auth()->user()->name ??  auth()->user()->username}} estas autenticado a la pagina</p>
        <a href="{{ route('logout.logout') }}">Logout</a>
    @endauth

    {{-- Si no estas logueado --}}
    @guest
        <p>Para ver el contenido <a href="{{ route('login.index') }}">inicia sesion</a></p>
    @endguest
</body>
</html>