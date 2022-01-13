@extends('candidatos.layout')

@section('title', 'Lista de Candidatos')

@section('content')
<a href="{{ route('candidatos.create') }}" class="btn btn-primary">Nuevo Candidato</a>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th>Cedula</th>
            <th>Nombres Completos</th>
            <th>Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($candidatos as $candidato)
        <tr>
            <td>{{ $candidato->cedula }}</td>
            <td>{{ $candidato->nombre_completo }}</td>
            <td>{{ $candidato->email }}</td>
            <td>
                <a href="{{ route('candidatos.show', $candidato->id) }}" class="btn btn-link">Mostrar</a>
                <a href="{{ route('candidatos.edit', $candidato->id) }}" class="btn btn-link">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{!! $candidatos->links() !!}
@endsection