@extends('layout')
@section('title', 'Editar proyecto')

@section('content')
<div class="card shadow-sm">
  <div class="card-header bg-white">
    <h4 class="mb-0">Editar proyecto #{{ $proyecto->id }}</h4>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('proyectos.update', $proyecto) }}">
      @csrf @method('PUT')
      @include('proyectos._form', ['proyecto' => $proyecto])
      <div class="mt-4 d-flex gap-2">
        <button class="btn btn-primary" type="submit">Actualizar</button>
        <a class="btn btn-outline-secondary" href="{{ route('proyectos.index') }}">Cancelar</a>
      </div>
    </form>
  </div>
</div>
@endsection
