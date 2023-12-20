<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Especialidades;
use App\Models\HoraAtencion;
use Illuminate\Http\Request;

class HoraAtencionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $horasAtenciones = HoraAtencion::all();

        return view('horasAtenciones.index', compact('horasAtenciones'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especialidades = Especialidades::all();
        $consultorios = Consultorio::all();
        
        return view('horasAtenciones.create', compact('especialidades', 'consultorios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HoraAtencion::create($request->all());
        return redirect()->route('horasAtenciones.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $horasAtenciones = HoraAtencion::findOrFail($id);


        return view('horasAtenciones.eliminar', compact('horasAtenciones'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $horasAtenciones = HoraAtencion::findOrFail($id);
        $especialidades = Especialidades::all();
        $consultorios = Consultorio::all();
        return view('horasAtenciones.edit', compact('horasAtenciones', 'especialidades', 'consultorios'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $horasAtenciones = HoraAtencion::findOrFail($id);


        $horasAtenciones->hora = $request->input('hora');
        $horasAtenciones->disponible = $request->input('disponible');
        $horasAtenciones->especialidad_id = $request->input('especialidad_id');
        $horasAtenciones->consultorio_id = $request->input('consultorio_id');

        $horasAtenciones->save();

        return redirect()->route('horasAtenciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $horasAtenciones = HoraAtencion::findOrFail($id);

        return view('horasAtenciones.eliminar', compact('horasAtenciones'));
    }
     public function destroy($id)
    {
        // Buscar la especialidad por ID
        $horasAtenciones = HoraAtencion::findOrFail($id);

        // Eliminar la especialidad
        $horasAtenciones->delete();

        // Redireccionar a la lista de especialidades o a donde desees
        return redirect()->route('horasAtenciones.index');
    }
}
