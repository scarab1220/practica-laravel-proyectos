<div class="field">
  <label>NombreProyecto</label>
  <input name="NombreProyecto" value="{{ old('NombreProyecto', $proyecto->NombreProyecto ?? '') }}" required>
</div>

<div class="field">
  <label>fuenteFondos</label>
  <input name="fuenteFondos" value="{{ old('fuenteFondos', $proyecto->fuenteFondos ?? '') }}" required>
</div>

<div class="field">
  <label>MontoPlanificado</label>
  <input type="number" step="0.01" min="0" name="MontoPlanificado" value="{{ old('MontoPlanificado', $proyecto->MontoPlanificado ?? '') }}" required>
</div>

<div class="field">
  <label>MontoPatrocinado</label>
  <input type="number" step="0.01" min="0" name="MontoPatrocinado" value="{{ old('MontoPatrocinado', $proyecto->MontoPatrocinado ?? '') }}" required>
</div>

<div class="field">
  <label>MontoFondosPropios</label>
  <input type="number" step="0.01" min="0" name="MontoFondosPropios" value="{{ old('MontoFondosPropios', $proyecto->MontoFondosPropios ?? '') }}" required>
</div>

@if ($errors->any())
  <div style="margin:10px 0; color:#b00;">
    <ul>
      @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
    </ul>
  </div>
@endif
