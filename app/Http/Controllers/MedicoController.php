<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use App\Models\Hospital;
use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.index', compact('medicos'));
    }

   /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especialidades = Especialidades::all();
        $hospitales = Hospital::all();
        return view('medicos.create', compact('especialidades', 'hospitales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Medico::create($request->all());
        return redirect()->route('medicos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $medico = Medico::findOrFail($id);


        return view('medicos.eliminar', compact('medico'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
        $especialidades = Especialidades::all();
        $hospitales = Hospital::all();
        return view('medicos.edit', compact('medico', 'especialidades', 'hospitales'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {


        $medico = Medico::findOrFail($id);


        $medico->nombre_completo = $request->input('nombre_completo');
        $medico->ci = $request->input('ci');
        $medico->especialidad_id = $request->input('especialidad_id');
        $medico->hospital_id = $request->input('hospital_id');

        $medico->save();

        return redirect()->route('medicos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $medico = Medico::findOrFail($id);

        return view('medicos.eliminar', compact('medico'));
    }
     public function destroy($id)
    {
        // Buscar la especialidad por ID
        $medico = Medico::findOrFail($id);

        // Eliminar la especialidad
        $medico->delete();

        // Redireccionar a la lista de especialidades o a donde desees
        return redirect()->route('medicos.index');
    }
}
