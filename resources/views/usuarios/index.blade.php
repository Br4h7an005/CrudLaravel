@extends('layout')
@section('title','Listado de Usuarios')
@section('content')

<h2 class="mt-4">Listado de Usuarios</h2>

<div class="text-end mb-3">
    <a href="{{ url('usuarios/create') }}" class="btn btn-primary">Nuevo</a>
</div>

@if(session('type'))
    <div class="alert alert-{{ session('type') }} alert-dismissible fade show" role="alert">
        <strong>Aviso</strong> {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Rol</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datos as $usuario)
        <tr>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->rol->nombre }}</td>
            <td>{{ $usuario->email }}</td>
            <td>
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-outline-primary btn-sm">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Desea eliminar el usuario?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop()
