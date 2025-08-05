@extends('layout')
@section('title','Registro rol')
@section('content')
<h3 class="mt-4 mb-3">Registrar rol</h3>
    <form  id="form" action="{{ url('roles')}}" method="POST">
        @csrf
        <div class="row mt-4">
            <div class="col-md-4">
                <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <div class="error compacto col-lg-5">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-md-4 mt-4"> 
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ url('roles')}}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
@stop()
@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ url('js/jquery.validate.min.js') }}"></script> 
    <script src="{{ url('js/localization/messages_es.min.js') }}"></script>
    <script>
        $("#form").validate({ 
            rules:{
                nombre:{
                    required: true,
                    maxlength: 60
                }
            }
         })
    </script>
@stop()