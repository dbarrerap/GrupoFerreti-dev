@extends('candidatos.layout')

@section('title', 'Crear Candidato')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <p>Han habido errores con los datos ingresados:</p>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('candidatos.store') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <label for="cedula">Identificacion</label>
            <input class="form-control" id="cedula" name="cedula" type="text" placeholder="No. de Cedula" required>
        </div>
        <div class="col-md-6">
            <label for="nombre_completo">Nombre Completo</label>
            <input class="form-control" id="nombre_completo" name="nombre_completo" type="text" placeholder="Apellidos y Nombres" required>
        </div>
        <div class="col-md-3">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" type="date" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="numero_movil">Telefono Movil</label>
            <input class="form-control" id="numero_movil" name="numero_movil" type="text" placeholder="0991234567" required>
        </div>
        <div class="col-md-3">
            <label for="numero_casa">Telefono Casa</label>
            <input class="form-control" id="numero_casa" name="numero_casa" type="text" placeholder="042123456">
        </div>
        <div class="col-md-6">
            <label for="email">Correo Electronico</label>
            <input class="form-control" id="email" name="email" type="email" placeholder="usuario@ejemplo.com" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <label for="estado_civil">Estado Civil</label>
            <select name="estado_civil" id="estado_civil" class="form-control" required>
                <option value="">-- Escoger una opcion --</option>
                <option value="soltero/a">Soltero/a</option>
                <option value="casado/a">Casado/a</option>
                <option value="divorciado/a">Divorciado/a</option>
                <option value="viudo/a">Viudo/a</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo" class="form-control">
            <option value="">-- Escoger una opcion --</option>
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="direccion">Direccion</label>
            <input class="form-control" id="direccion" name="direccion" type="text" placeholder="Ingrese una ubicacion" required>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-1">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('candidatos.index') }}" class="btn btn-outline-danger">Cancelar</a>
        </div>
    </div>
</form>
@endsection