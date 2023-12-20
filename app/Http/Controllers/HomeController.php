<?php

namespace App\Http\Controllers;

use App\Models\Consultorio;
use App\Models\Especialidades;
use App\Models\HoraAtencion;
use App\Models\Medico;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        $especialidades = Especialidades::count();
        $medicos = Medico::count();
        $consultorios = Consultorio::count();
        $horaAtenciones = HoraAtencion::count();

        return view('dashboard.index', compact('especialidades', 'medicos', 'consultorios', 'horaAtenciones'));
    }
}
