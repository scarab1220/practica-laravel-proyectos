@extends('layout')

@section('content')
<form method="POST" action="{{ route('proyectos.update', $proyecto) }}">
  @csrf @method('PUT')
  @include('proyectos._form', ['proyecto' => $proyecto])
  <button class="btn" type="submit">Actualizar</button>
</form>
@endsection
