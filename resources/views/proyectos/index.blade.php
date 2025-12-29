@extends('layout')

@section('content')
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>NombreProyecto</th>
      <th>fuenteFondos</th>
      <th>MontoPlanificado</th>
      <th>MontoPatrocinado</th>
      <th>MontoFondosPropios</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @forelse($proyectos as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->NombreProyecto }}</td>
        <td>{{ $p->fuenteFondos }}</td>
        <td>{{ number_format($p->MontoPlanificado, 2) }}</td>
        <td>{{ number_format($p->MontoPatrocinado, 2) }}</td>
        <td>{{ number_format($p->MontoFondosPropios, 2) }}</td>
        <td>
          <a class="btn" href="{{ route('proyectos.edit', $p) }}">Editar</a>
          <form action="{{ route('proyectos.destroy', $p) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Eliminar?')">Eliminar</button>
          </form>
        </td>
      </tr>
    @empty
      <tr><td colspan="7">No hay proyectos.</td></tr>
    @endforelse
  </tbody>
</table>

<div style="margin-top:12px;">
  {{ $proyectos->links() }}
</div>
@endsection
