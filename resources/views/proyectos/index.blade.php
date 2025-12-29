@extends('layout')

@section('title', 'Listado de proyectos')

@section('content')
<div class="d-flex align-items-center justify-content-between mb-3">
  <div>
    <h3 class="mb-1">Proyectos</h3>
    <div class="text-muted">CRUD + PDF (MySQL / Laravel)</div>
  </div>
  <a class="btn btn-primary" href="{{ route('proyectos.create') }}">+ Nuevo proyecto</a>
</div>

<div class="card shadow-sm">
  <div class="card-body p-0">
    <div class="table-responsive">
      <table class="table table-hover align-middle mb-0">
        <thead class="table-light">
          <tr>
            <th class="ps-3">Id</th>
            <th>NombreProyecto</th>
            <th>fuenteFondos</th>
            <th class="text-end">MontoPlanificado</th>
            <th class="text-end">MontoPatrocinado</th>
            <th class="text-end">MontoFondosPropios</th>
            <th class="text-end pe-3">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @forelse($proyectos as $p)
          <tr>
            <td class="ps-3 fw-semibold">{{ $p->id }}</td>
            <td>{{ $p->NombreProyecto }}</td>
            <td><span class="badge text-bg-secondary">{{ $p->fuenteFondos }}</span></td>
            <td class="text-end">{{ number_format($p->MontoPlanificado, 2) }}</td>
            <td class="text-end">{{ number_format($p->MontoPatrocinado, 2) }}</td>
            <td class="text-end">{{ number_format($p->MontoFondosPropios, 2) }}</td>
            <td class="text-end pe-3">
              <a class="btn btn-sm btn-outline-primary" href="{{ route('proyectos.edit', $p) }}">Editar</a>
              <form action="{{ route('proyectos.destroy', $p) }}" method="POST" class="d-inline">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-outline-danger"
                        onclick="return confirm('¿Eliminar este proyecto?')">
                  Eliminar
                </button>
              </form>
            </td>
          </tr>
          @empty
          <tr><td colspan="7" class="text-center text-muted py-4">No hay proyectos aún.</td></tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="mt-3">
  {{ $proyectos->links() }}
</div>
@endsection
