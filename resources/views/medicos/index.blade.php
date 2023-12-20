@extends('home')
@section('contenido')
 
   
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">

                    <h5 class="card-title mb-0">Lista De Medicos</h5>
                    <a class="btn btn-light" href="{{route('medicos.create')}}"><i
                            class="bi-plus-circle me-2"></i>Agregar Nuevo Registro</a>
                </div>
                <div class="card-body">
                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>SR No.</th>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>CI</th>
                                <th>Especialidad</th>
                                <th>Hospital</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0; ?>
                            @foreach ($medicos as $medico)
                                <?php $cont = $cont + 1; ?>

                                <tr>
                                    <td>{{ $cont }}</td>
                                    <td>{{ $medico->id }}</td>
                                    <td>{{ $medico->nombre_completo }}</td>
                                    <td>{{ $medico->ci }}</td>
                                    <td>{{ $medico->especialidad->nombre }}</td>
                                    <td>{{ $medico->hospital->nombre }}</td>
                                    <td>
                                        <a href="{{route('medicos.show', $medico->id)}}" class="btn "><i
                                                class="ri-eye-fill align-bottom  text-muted"></i></a>
                                        <a href="{{route('medicos.edit', $medico->id)}}" class="btn  edit-item-btn"><i
                                                class="ri-pencil-fill align-bottom text-muted"></i></a>
                                        <a href="{{route('medicos.show', $medico->id)}}" class="btn  remove-item-btn"><i
                                                class="ri-delete-bin-fill align-bottom text-muted"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
