<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Práctica Laravel</title>
  <style>
    body{font-family: Arial, sans-serif; margin:24px;}
    table{width:100%; border-collapse:collapse;}
    th,td{border:1px solid #ccc; padding:8px; text-align:left;}
    .row{display:flex; gap:12px; align-items:center; justify-content:space-between;}
    .btn{padding:6px 10px; border:1px solid #333; background:#fff; cursor:pointer; text-decoration:none; color:#000;}
    .btn-danger{border-color:#b00;}
    .msg{padding:10px; background:#e7ffe7; border:1px solid #7c7; margin:10px 0;}
    .field{margin:10px 0;}
    input{padding:8px; width:100%; max-width:520px;}
  </style>
</head>
<body>
  <div class="row">
    <h2>Proyectos</h2>
    <div>
      <a class="btn" href="{{ route('proyectos.index') }}">Listado</a>
      <a class="btn" href="{{ route('proyectos.create') }}">Nuevo</a>
      <a class="btn" href="{{ route('proyectos.pdf') }}">PDF</a>
    </div>
  </div>

  @if (session('ok'))
    <div class="msg">{{ session('ok') }}</div>
  @endif

  @yield('content')
</body>
</html>
