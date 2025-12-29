<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <style>
    body{font-family: DejaVu Sans, sans-serif; font-size:12px;}
    .center{text-align:center;}
    table{width:100%; border-collapse:collapse; margin-top:10px;}
    th,td{border:1px solid #000; padding:6px; text-align:left;}
  </style>
</head>
<body>
  <div class="center"><strong>Gobierno de El Salvador</strong></div>
  <div class="center"><strong>{{ $institucion }}</strong></div>
  <div class="center">Fecha: {{ $fecha }}</div>

  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>NombreProyecto</th>
        <th>fuenteFondos</th>
        <th>MontoPlanificado</th>
        <th>MontoPatrocinado</th>
        <th>MontoFondosPropios</th>
      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $p)
      <tr>
        <td>{{ $p->id }}</td>
        <td>{{ $p->NombreProyecto }}</td>
        <td>{{ $p->fuenteFondos }}</td>
        <td>{{ number_format($p->MontoPlanificado, 2) }}</td>
        <td>{{ number_format($p->MontoPatrocinado, 2) }}</td>
        <td>{{ number_format($p->MontoFondosPropios, 2) }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
