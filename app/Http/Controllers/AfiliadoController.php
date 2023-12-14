<?php

namespace App\Http\Controllers;

use App\Models\Afiliado;
use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\Especialidades;
use App\Models\Hospital;
use App\Models\Empresa;
use App\Models\HoraAtencion;

class AfiliadoController extends Controller
{
    public function validarAfiliadoForm()
    {
        return view('validar_afiliado');
    }



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
           
            foreach ($medicos as $medico) {
                $especialidad = Especialidades::find($medico->especialidad_id);
                $hospital = Hospital::find($medico->hospital_id);
                $medico->especialidad = $especialidad;
                $medico->hospital = $hospital;
            }

            return view('mostrar_especialidades', [
                'afiliado' => $afiliado,
                'medicos' => $medicos,
                'especialidad' => $especialidad,
                'hospital' => $hospital,
                'horasDisponibles' => $horasDisponibles,
            ]);
        } else {
            return "Afiliado no encontrado. <a href='" . route('afiliados.index') . "'>Volver</a>";
        }

        // $request->validate([
        //     'ci' => 'required|numeric',
        // ]);
        
        // $ci = $request->input('ci');
        // $afiliado = Afiliado::where('ci', $ci)->first();
        
        // if ($afiliado) {
        //     $medicos = Medico::all();
        
        //     foreach ($medicos as $medico) {
        //         $especialidad = Especialidades::find($medico->especialidad_id);
        //         $hospital = Hospital::find($medico->hospital_id);
        
        //         // Asegúrate de que $especialidad y $hospital no estén nulos antes de acceder a sus propiedades
        //         if ($especialidad && $hospital) {
        //             // Obtener información de la empresa a través del hospital
        //             $empresa = Empresa::find($hospital->empresa_id);
        
        //             $medico->especialidad = $especialidad;
        //             $medico->hospital = [
        //                 'Nombre' => $hospital->Nombre,
        //                 'Empresa' => $empresa ? $empresa->Nombre : 'No disponible',
        //             ];
        //         } else {
        //             $medico->especialidad = 'No disponible';
        //             $medico->hospital = [
        //                 'Nombre' => 'No disponible',
        //                 'Empresa' => 'No disponible',
        //             ];
        //         }
        //     }
        
        //     return view('mostrar_especialidades', [
        //         'afiliado' => $afiliado,
        //         'medicos' => $medicos,
        //         'especialidad' => $especialidad, // Puedes considerar si realmente necesitas pasar esto a la vista
        //         'hospital' => $hospital, // Puedes considerar si realmente necesitas pasar esto a la vista
        //     ]);
        // } else {
        //     return "Afiliado no encontrado. <a href='" . route('afiliados.index') . "'>Volver</a>";
        // }
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
