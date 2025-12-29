<?php

use App\Http\Controllers\ProyectoController;

Route::get('/', function () {
    return redirect()->route('proyectos.index');
});

Route::resource('proyectos', ProyectoController::class);

// Ruta PDF (la agregamos después de instalar dompdf)
Route::get('/proyectos-pdf', [ProyectoController::class, 'pdf'])->name('proyectos.pdf');
