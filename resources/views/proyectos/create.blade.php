@extends('layout')

@section('content')
<form method="POST" action="{{ route('proyectos.store') }}">
  @csrf
  @include('proyectos._form')
  <button class="btn" type="submit">Guardar</button>
</form>
@endsection
