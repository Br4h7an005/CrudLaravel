<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css">
    @yield('css')
    <title>@yield('title')</title>
</head>
<div class="container">
        <body>
        <a href="{{ url('home')}}" class="btn btn-primary mt-4">Inicio</a>  
        <a href="{{ url('categorias')}}" class="btn btn-primary mt-4">Categorias</a> 
        <a href="{{ url('usuarios')}}" class="btn btn-primary mt-4">Usuarios</a>
        <a href="{{ url('logout')}}" class="btn btn-danger mt-4">Salir</a>
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>