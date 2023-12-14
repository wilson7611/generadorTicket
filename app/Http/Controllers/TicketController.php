<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use App\Models\Ticket;
use App\Models\Afiliado;
use App\Models\Medico;
use App\Models\Hospital;
use App\Models\Atencion;
use App\Models\HoraAtencion;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // public function formularioRegistro(Request $request)
    // {
    //     $afiliado = $request->get('afiliado');
    //     $especialidades = Especialidades::all();

    //     return view('registrar_ticket', ['afiliado' => $afiliado, 'especialidades' => $especialidades]);
    // }

    // public function registrarTicket(Request $request)
    // {
    //     // Validación de datos aquí...

    //     $ticket = new Ticket([
    //         'afiliado_id' => $request->input('afiliado_id'),
    //         'especialidad_id' => $request->input('especialidad_id'),
    //         'medico_id' => $request->input('medico_id'),
    //         'hospital_id' => $request->input('hospital_id'),
    //     ]);

    //     $ticket->save();

    //     return "Ticket registrado exitosamente.";
    // }

    public function registrarForm(Afiliado $afiliado, Especialidades $especialidad, Medico $medico, Hospital $hospital, HoraAtencion $horasDisponibles)
    {
        $horasDisponibles = HoraAtencion::all();
        return view('afiliados.registrar', ['afiliado' => $afiliado, 'especialidad' => $especialidad, 'medico' => $medico, 'hospital' => $hospital, 'horasDisponibles' => $horasDisponibles]);
    }

    public function registrar(Request $request)
    {

        // // Validar los datos del formulario
        // $request->validate([
        //     'fecha' => 'required|date',
        //     'estado' => 'required|in:Activa,Inactiva', // Ajusta según tus estados
        //     // Otras reglas de validación...
        // ]);

        // Crear una nueva Atencion
        $atencion = new Atencion([
            'fecha' => now(),
            'estado' => 'activo',
            'medico_id' => $request->input('medico_id'),
            'horaAtencion_id' => $request->input('horaAtencion_id'),
            'afiliado_id' => $request->input('afiliado_id'),
            
        ]);

        $atencion->save();

        // Crear un nuevo Ticket asociado a la Atencion
        $ticket = new Ticket([
            'codigo' => uniqid('ticket_', true),
            'fecha_hora' => now(), // Puedes ajustar la fecha según tus necesidades
            'estado' => 'reservado', // Puedes ajustar el estado según tus necesidades
            'observacion' => "",
            'atencion_id' => $atencion->id,
        ]);

        $ticket->save();

        return "Atencion y Ticket registrados exitosamente.";
    }
    // public function index()
    // {
    //     $tickets = Ticket::with([
    //         'afiliados',
    //         'medicos',
    //         'medicos.especialidades',
    //         'medicos.especialidades.hospital',
    //         'medicos.atenciones',
    //         'medicos.atenciones.horas',
    //     ])->get();

    //     return view('tickets.index', compact('tickets'));
    // }

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
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
