@extends('home')
@section('contenido')
 
   
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">

                    <h5 class="card-title mb-0">Lista De Especialidades</h5>
                    <a class="btn btn-light" href="{{route('especialidades.create')}}"><i
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
                                <th>Color</th>
                                <th>Cantidad de Tickets</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0; ?>
                            @foreach ($especialidades as $especialidad)
                                <?php $cont = $cont + 1; ?>

                                <tr>
                                    <td>{{ $cont }}</td>
                                    <td>{{ $especialidad->id }}</td>
                                    <td>{{ $especialidad->nombre }}</td>
                                    <td>{{ $especialidad->color }}</td>
                                    <td>{{ $especialidad->cantidad_ticket }}</td>
                                    <td>
                                        <a href="{{route('especialidades.show', $especialidad->id)}}" class="btn "><i
                                                class="ri-eye-fill align-bottom  text-muted"></i></a>
                                        <a href="{{route('especialidades.edit', $especialidad->id)}}" class="btn  edit-item-btn"><i
                                                class="ri-pencil-fill align-bottom text-muted"></i></a>
                                        <a href="{{route('especialidades.show', $especialidad->id)}}" class="btn  remove-item-btn"><i
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
