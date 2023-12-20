<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Hospital;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Const_;

class ConsultorioController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultorios = Consultorio::all();
        return view('consultorios.index', compact('consultorios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $consultorios = Consultorio::all();
        $hospitales = Hospital::all();
        return view('consultorios.create', compact('consultorios', 'hospitales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Consultorio::create($request->all());
        return redirect()->route('consultorios.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $consultorio = Consultorio::findOrFail($id);

        return view('consultorios.eliminar', compact('consultorio'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $consultorio = Consultorio::findOrFail($id);
        $hospitales = Hospital::all();
        return view('consultorios.edit', compact('consultorio', 'hospitales'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       


        $consultorio = Consultorio::findOrFail($id);


        $consultorio->nombre = $request->input('nombre');
        $consultorio->hospital_id = $request->input('hospital_id');

        $consultorio->save();

        return redirect()->route('consultorios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $consultorio = Consultorio::findOrFail($id);

        return view('consultorios.eliminar', compact('consultorio'));
    }
     public function destroy($id)
    {
        // Buscar la especialidad por ID
        $consultorio = Consultorio::findOrFail($id);

        // Eliminar la especialidad
        $consultorio->delete();

        // Redireccionar a la lista de especialidades o a donde desees
        return redirect()->route('consultorios.index');
    }
}
