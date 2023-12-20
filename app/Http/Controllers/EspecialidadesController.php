<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $especialidades = Especialidades::all();
        return view('especialidades.index', compact('especialidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especialidades = Especialidades::all();
        return view('especialidades.create', compact('especialidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Especialidades::create($request->all());
        return redirect()->route('especialidades.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $especialidad = Especialidades::findOrFail($id);

        return view('especialidades.eliminar', compact('especialidad'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $especialidad = Especialidades::findOrFail($id);
        
        return view('especialidades.edit', compact('especialidad'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar la solicitud
        $request->validate([
            'nombre' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'cantidad_ticket' => 'required|integer',

        ]);


        $especialidad = Especialidades::findOrFail($id);


        $especialidad->nombre = $request->input('nombre');
        $especialidad->color = $request->input('color');
        $especialidad->cantidad_ticket = $request->input('cantidad_ticket');

        $especialidad->save();

        return redirect()->route('especialidades.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $especialidad = Especialidades::findOrFail($id);

        return view('especialidades.eliminar', compact('especialidad'));
    }
     public function destroy($id)
    {
        // Buscar la especialidad por ID
        $especialidad = Especialidades::findOrFail($id);

        // Eliminar la especialidad
        $especialidad->delete();

        // Redireccionar a la lista de especialidades o a donde desees
        return redirect()->route('especialidades.index');
    }
}
