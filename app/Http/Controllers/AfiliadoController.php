<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use App\Models\Consultorio;
use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Especialidades;
use App\Models\Hospital;
use App\Models\Empresa;
use App\Models\HoraAtencion;

class AfiliadoController extends Controller
{
    // FORMULARIO PARA VALIDAR AL AFILIADO
    public function validarAfiliadoForm()
    {
        return view('validar_afiliado');
    }

    //METODO PARA VALIDAR AL AFILIADO, SI ES AFILIADO NOS MANDA A LAS ESPECILIDADES
    public function validarAfiliado(Request $request)
    {
        $request->validate([
            'ci' => 'required|numeric',
        ]);

        $ci = $request->input('ci');
        $afiliado = Afiliado::where('ci', $ci)->first();

        if ($afiliado) {
            $medicos = Medico::all();
            $horasDisponibles = HoraAtencion::all();
            $consultorios = Consultorio::all();
            $especialidad = null;
            $hospital = null;
            $consultorio = null;
            foreach ($medicos as $medico) {

                $especialidad = Especialidades::find($medico->especialidad_id);
                $hospital = Hospital::find($medico->hospital_id);
                $consultorio = Consultorio::find($medico->hospital_id);
                $medico->especialidad = $especialidad;
                $medico->hospital = $hospital;
            }

            return view('mostrar_especialidades', [
                'afiliado' => $afiliado,
                'medicos' => $medicos,
                'especialidad' => $especialidad,
                'hospital' => $hospital,
                'horasDisponibles' => $horasDisponibles,
                'consultorio' => $consultorio,
            ]);
        } else {
            return "Afiliado no encontrado. <a href='" . route('afiliados.index') . "'>Volver</a>";
        }      
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('afiliados.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Afiliado $afiliado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Afiliado $afiliado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Afiliado $afiliado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Afiliado $afiliado)
    {
        //
    }
}
