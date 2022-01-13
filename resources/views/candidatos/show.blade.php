@extends('candidatos.layout')

@section('title', 'Detalles de Candidato')

@section('content')
<div class="row">
    <div class="col-md-3">
        <label for="cedula">Identificacion</label>
        <input class="form-control-plaintext" readonly id="cedula" type="text" value="{{ $candidato->cedula }}">
    </div>
    <div class="col-md-6">
        <label for="nombre_completo">Nombre Completo</label>
        <input class="form-control-plaintext" readonly id="nombre_completo" type="text" value="{{ $candidato->nombre_completo }}">
    </div>
    <div class="col-md-3">
        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
        <input class="form-control-plaintext" readonly id="fecha_nacimiento" type="text" value="{{ $candidato->fecha_nacimiento }}">
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label for="numero_movil">Telefono Movil</label>
        <input class="form-control-plaintext" readonly id="numero_movil" type="text" value="{{ $candidato->numero_movil }}">
    </div>
    <div class="col-md-3">
        <label for="numero_casa">Telefono Casa</label>
        <input class="form-control-plaintext" readonly id="numero_casa" type="text" value="{{ $candidato->numero_casa }}">
    </div>
    <div class="col-md-6">
        <label for="email">Email</label>
        <input class="form-control-plaintext" readonly id="email" type="text" value="{{ $candidato->email }}">
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <label for="estado_civil">Estado Civil</label>
        <input class="form-control-plaintext" readonly id="estado_civil" type="text" value="{{ $candidato->estado_civil }}">
    </div>
    <div class="col-md-3">
        <label for="sexo">Sexo</label>
        <input class="form-control-plaintext" readonly id="sexo" type="text" value="{{ $candidato->sexo }}">
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="direccion">Direccion</label>
        <input class="form-control-plaintext" readonly id="direccion" type="text" value="{{ $candidato->direccion }}">
    </div>
</div>

<a href="{{ route('candidatos.index') }}" class="btn btn-link">Volver</a>
@endsection