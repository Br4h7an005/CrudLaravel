@extends('layout')
@section('title','Saludo')
@section('content')
<h2 class="mt-4">Listado de Categorias</h2>
<div class="text-end mb-3">
<a href="{{ url('categorias/create')}}" class="btn btn-primary">Nuevo</a> 
</div>
@if(session('type'))
    <div class="alert alert-{{ (session('type')) }} alert-dismissible fade show" role="alert mt-5">
        <strong>Aviso</strong> {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </thead>
<body>
    @foreach($datos as $categoria)
    <tr>
        <td>
            {{ $categoria->nombre }}
        </td>
        <td>
            {{ $categoria->descripcion }}
        </td>
        <td>
            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-outline-primary btn-sm">Editar</a>
            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Desea eliminar la categoría?')">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</body>
</table>
@stop()