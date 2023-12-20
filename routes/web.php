<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\AtencionController;
use App\Http\Controllers\ConsultorioController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\EspecialidadesController;
use App\Http\Controllers\HoraAtencionController;
use App\Http\Controllers\registroTicketsController;

use App\Models\Especialidades;
use App\Models\HoraAtencion;
use App\Models\Medico;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect()->route('afiliados.index');
});


// routes/web.php
Route::get('/afiliados', [AfiliadoController::class, 'index'])->name('afiliados.index');
Route::post('/afiliados/validar', [AfiliadoController::class, 'validarAfiliado'])->name('afiliados.validar');
// Route::get('/afiliados/especialidades', [AfiliadoController::class, 'especialidades'])->name('afiliados.especialidades');
// Route::get('/validar-afiliado', [AfiliadoController::class, 'validarAfiliadoForm'])->name('validarAfiliadoForm');

Route::get('/afiliados/registrar/{afiliado}/{especialidad}/{medico}/{hospital}', [TicketController::class, 'registrarForm'])->name('afiliados.registrar');
Route::post('/afiliados/registrar', [TicketController::class, 'registrar'])->name('afiliados.registrar.post');

Auth::routes();
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/especialidades/index', [EspecialidadesController::class, 'index']);
Route::resource('especialidades', EspecialidadesController::class);
Route::get('/especialidades/delete', [EspecialidadesController::class, 'delete']);

Route::get('/medicos/index', [MedicoController::class, 'index']);
Route::resource('medicos', MedicoController::class);
Route::get('/especialidades/delete', [MedicoController::class, 'delete']);


Route::get('/consultorios/index', [ConsultorioController::class, 'index']);
Route::resource('consultorios', ConsultorioController::class);
Route::get('/consultorios/delete', [ConsultorioController::class, 'delete']);

Route::get('/horasAtenciones/index', [HoraAtencionController::class, 'index']);
Route::resource('horasAtenciones', HoraAtencionController::class);
Route::get('/horasAtenciones/delete', [HoraAtencionController::class, 'delete']);

Route::get('/atenciones/index', [AtencionController::class, 'index']);
Route::resource('atenciones', AtencionController::class);
Route::get('/atenciones/delete', [AtencionController::class, 'delete']);

Route::get('/tickets/index', [registroTicketsController::class, 'index']);
Route::resource('tickets', registroTicketsController::class);
Route::get('/tickets/delete', [registroTicketsController::class, 'delete']);


