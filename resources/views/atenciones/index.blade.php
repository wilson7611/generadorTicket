@extends('home')
@section('contenido')
 
   
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">

                    <h5 class="card-title mb-0">Lista De Atenciones</h5>
                    {{-- <a class="btn btn-light" href="{{route('atenciones.create')}}"><i
                            class="bi-plus-circle me-2"></i>Agregar Nuevo Registro</a> --}}
                </div>
                <div class="card-body">
                    <table id="buttons-datatables" class="display table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>SR No.</th>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                                <th>Medico</th>
                                <th>Hora</th>
                                <th>Afiliado</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0; ?>
                            @foreach ($atenciones as $atencion)
                                <?php $cont = $cont + 1; ?>

                                <tr>
                                    <td>{{ $cont }}</td>
                                    <td>{{ $atencion->id }}</td>
                                    <td>{{ $atencion->fecha }}</td>
                                    <td>{{ $atencion->estado }}</td>
                                    <td>{{ $atencion->medico->nombre_completo }}</td>
                                    <td>{{ $atencion->horaAtencion->hora }}</td>
                                    <td>{{ $atencion->afiliado->nombre_completo }}</td>
                                    <td>
                                        <a href="{{route('atenciones.show', $atencion->id)}}" class="btn "><i
                                                class="ri-eye-fill align-bottom  text-muted"></i></a>
                                        <a href="{{route('atenciones.edit', $atencion->id)}}" class="btn  edit-item-btn"><i
                                                class="ri-pencil-fill align-bottom text-muted"></i></a>
                                        <a href="{{route('atenciones.destroy', $atencion->id)}}" class="btn  remove-item-btn"><i
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
@endsection
