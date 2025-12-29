<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::orderBy('id', 'desc')->paginate(10);
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'NombreProyecto' => 'required|string|max:150',
            'fuenteFondos' => 'required|string|max:120',
            'MontoPlanificado' => 'required|numeric|min:0',
            'MontoPatrocinado' => 'required|numeric|min:0',
            'MontoFondosPropios' => 'required|numeric|min:0',
        ]);

        Proyecto::create($data);
        return redirect()->route('proyectos.index')->with('ok', 'Proyecto creado.');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $data = $request->validate([
            'NombreProyecto' => 'required|string|max:150',
            'fuenteFondos' => 'required|string|max:120',
            'MontoPlanificado' => 'required|numeric|min:0',
            'MontoPatrocinado' => 'required|numeric|min:0',
            'MontoFondosPropios' => 'required|numeric|min:0',
        ]);

        $proyecto->update($data);
        return redirect()->route('proyectos.index')->with('ok', 'Proyecto actualizado.');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('ok', 'Proyecto eliminado.');
    }

    // PDF según formato solicitado
    public function pdf()
    {
        $proyectos = Proyecto::orderBy('id')->get();
        $fecha = now()->format('Y-m-d');
        $institucion = 'Nombre de su institución'; // cámbialo aquí

        $pdf = Pdf::loadView('proyectos.pdf', compact('proyectos', 'fecha', 'institucion'));
        return $pdf->download('informe_proyectos.pdf');
    }
}
