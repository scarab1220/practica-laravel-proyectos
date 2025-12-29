@extends('layout')
@section('title', 'Nuevo proyecto')

@section('content')
<div class="card shadow-sm">
  <div class="card-header bg-white">
    <h4 class="mb-0">Nuevo proyecto</h4>
  </div>
  <div class="card-body">
    <form method="POST" action="{{ route('proyectos.store') }}">
      @csrf
      @include('proyectos._form')
      <div class="mt-4 d-flex gap-2">
        <button class="btn btn-primary" type="submit">Guardar</button>
        <a class="btn btn-outline-secondary" href="{{ route('proyectos.index') }}">Cancelar</a>
      </div>
    </form>
  </div>
</div>
@endsection
