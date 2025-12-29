<div class="row g-3">
  <div class="col-12">
    <label class="form-label">Nombre del proyecto</label>
    <input class="form-control" name="NombreProyecto"
           value="{{ old('NombreProyecto', $proyecto->NombreProyecto ?? '') }}"
           placeholder="Ej: Sistema de gestión escolar" required>
  </div>

  <div class="col-12 col-md-6">
    <label class="form-label">Fuente de fondos</label>
    <input class="form-control" name="fuenteFondos"
           value="{{ old('fuenteFondos', $proyecto->fuenteFondos ?? '') }}"
           placeholder="Ej: Gobierno / Donación / ONG" required>
  </div>

  <div class="col-12 col-md-6">
    <label class="form-label">Monto planificado</label>
    <input class="form-control" type="number" step="0.01" min="0" name="MontoPlanificado"
           value="{{ old('MontoPlanificado', $proyecto->MontoPlanificado ?? '') }}"
           required>
  </div>

  <div class="col-12 col-md-6">
    <label class="form-label">Monto patrocinado</label>
    <input class="form-control" type="number" step="0.01" min="0" name="MontoPatrocinado"
           value="{{ old('MontoPatrocinado', $proyecto->MontoPatrocinado ?? '') }}"
           required>
  </div>

  <div class="col-12 col-md-6">
    <label class="form-label">Fondos propios</label>
    <input class="form-control" type="number" step="0.01" min="0" name="MontoFondosPropios"
           value="{{ old('MontoFondosPropios', $proyecto->MontoFondosPropios ?? '') }}"
           required>
  </div>
</div>
