<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Proyectos')</title>

  <!-- Bootstrap 5 (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand fw-semibold" href="{{ route('proyectos.index') }}">Práctica Laravel</a>
    <div class="ms-auto d-flex gap-2">
      <a class="btn btn-outline-primary" href="{{ route('proyectos.index') }}">Listado</a>
      <a class="btn btn-primary" href="{{ route('proyectos.create') }}">Nuevo</a>
      <a class="btn btn-outline-dark" href="{{ route('proyectos.pdf') }}">PDF</a>
    </div>
  </div>
</nav>

<main class="container py-4">
  @if (session('ok'))
    <div class="alert alert-success">{{ session('ok') }}</div>
  @endif

  @if ($errors->any())
    <div class="alert alert-danger">
      <div class="fw-semibold mb-2">Revisa los campos:</div>
      <ul class="mb-0">
        @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
      </ul>
    </div>
  @endif

  @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
