<?php

namespace App\Http\Controllers;

use App\Models\Especialidades;
use Illuminate\Http\Request;

class EspecialidadesController extends Controller
{
    // set index page view
    public function index()
    {
        return view('especialidades.index');
    }
    // handle fetch all eamployees ajax request
    public function fetchAll()
    {
        $empresas = Especialidades::all();
        $salida = '';
        if ($empresas->count() > 0) {
            $salida .= '<table class="table table-striped table-sm text-center align-middle">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Cantidad Tickets</th>
                <th>Accion</th>
              </tr>
            </thead>
            <tbody>';
            foreach ($empresas as $empresa) {
                $salida .= '<tr>
                <td>' . $empresa->id . '</td>
                <td>' . $empresa->nombre . '</td>
                <td>' . $empresa->color . '</td>
                <td>' . $empresa->cantidad_ticket . '</td>
                <td>
                  <a href="#" id="' . $empresa->id . '" class="text-success mx-1 editIcon" data-bs-toggle="modal" data-bs-target="#editEmployeeModal"><i class="bi-pencil-square h4"></i></a>

                  <a href="#" id="' . $empresa->id . '" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                  
                </td>
              </tr>';
            }
            $salida .= '</tbody></table>';
            echo $salida;
        } else {
            echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
    }

    // handle insert a new employee ajax request
    public function store(Request $request)
    {
        // $file = $request->file('avatar');
        // $fileName = time() . '.' . $file->getClientOriginalExtension();
        // $file->storeAs('public/images', $fileName);

        $empData = ['nombre' => $request->nombre, 'propietario' => $request->propietario];
        Especialidades::create($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle edit an employee ajax request
    public function edit(Request $request)
    {
        $id = $request->id;
        $emp = Especialidades::find($id);
        return response()->json($emp);
    }

    // handle update an employee ajax request
    public function update(Request $request)
    {
        $fileName = '';
        $emp = Especialidades::find($request->emp_id);

        $empData = ['nombre' => $request->nombre, 'propietario' => $request->propietario];

        $emp->update($empData);
        return response()->json([
            'status' => 200,
        ]);
    }

    // handle delete an employee ajax request
    public function delete(Request $request)
    {
        $id = $request->id;
        $emp = Especialidades::find($id);
        Especialidades::destroy($id);      
    }
}
