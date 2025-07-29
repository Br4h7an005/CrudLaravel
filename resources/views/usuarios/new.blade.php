@extends('layout')
@section('title','Registro Usuario')
@section('content')

<h3 class="mt-4 mb-3">Registro Usuario</h3>

<form id="form" action="{{ url('usuarios') }}" method="POST">
    @csrf
    <div class="row mt-4">
        <div class="col-md-4">
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre" value="{{ old('nombre') }}">
            @error('nombre')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <input type="text" name="telefono" class="form-control" placeholder="Ingrese teléfono" value="{{ old('telefono') }}">
            @error('telefono')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <label><strong>Seleccione el rol del usuario:</strong></label><br>
            <label class="me-2"><input type="radio" name="rol" value="1" {{ old('rol') == '1' ? 'checked' : '' }}> Administrador</label>
            <label><input type="radio" name="rol" value="2" {{ old('rol') == '2' ? 'checked' : '' }}> Cliente</label>
            @error('rol')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <input type="email" name="email" class="form-control" placeholder="Ingrese correo" value="{{ old('email') }}">
            @error('correo')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <input type="password" name="password" class="form-control" placeholder="Ingrese clave">
            @error('clave')
                <div class="error compacto col-lg-5">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-4 mt-4">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ url('usuarios') }}" class="btn btn-secondary">Cancelar</a>
    </div>
</form>

@stop()

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="{{ url('js/jquery.validate.min.js') }}"></script>
<script src="{{ url('js/localization/messages_es.min.js') }}"></script>
<script>
    $("#form").validate({
        rules: {
            nombre: {
                required: true,
                maxlength: 50
            },
            telefono: {
                required: true,
                digits: true
            },
            rol: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        }
    });
</script>
@stop()
