@extends('home')
@section('contenido')
 <!-- App favicon -->
 {{-- <link rel="shortcut icon" href="http://127.0.0.1:8000/assets/images/favicon.ico">
 <!--datatable css-->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<!--datatable responsive css-->
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
<!-- Layout config Js --> --}}
{{-- <script src="http://127.0.0.1:8000/assets/js/layout.js"></script>
<!-- Bootstrap Css --> --}}
<link href="http://127.0.0.1:8000/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="http://127.0.0.1:8000/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="http://127.0.0.1:8000/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="http://127.0.0.1:8000/assets/css/custom.min.css" id="app-style" rel="stylesheet" type="text/css" /> 
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">

                    <h5 class="card-title mb-0">Lista De Tickets</h5>
                    {{-- <a class="btn btn-light" href="{{route('tickets.create')}}"><i
                            class="bi-plus-circle me-2"></i>Agregar Nuevo Registro</a> --}}
                </div>
                <div class="card-body">
                    <table  id="buttons-datatables" class="display table table-bordered" style="width:100%"
                        >
                        <thead>
                            <tr>
                                <th>SR No.</th>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Fecha y Hora</th>
                                <th>Estado</th>

                                <th>Observacion</th>
                                <th>Atencion</th>
                                <th>Fecha de Atencion</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            <?php $cont = 0; ?>
                            @foreach ($registroTickets as $registroTicket)
                                <?php $cont = $cont + 1; ?>

                                <tr>
                                    <td>{{ $cont }}</td>
                                    <td>{{ $registroTicket->id }}</td>
                                    <td>{{ $registroTicket->codigo }}</td>
                                    <td>{{ $registroTicket->fecha_hora }}</td>
                                    <td>{{ $registroTicket->estado }}</td>
                                    <td>{{ $registroTicket->observacion }}</td>
                                    <td>{{ $registroTicket->atencion_id }}</td>
                                    <td>{{ $registroTicket->atencion->fecha }}</td>
                                    {{-- <td>
                                        <a href="{{route('tickets.show', $registroTicket->id)}}" class="btn "><i
                                                class="ri-eye-fill align-bottom  text-muted"></i></a>
                                        <a href="{{route('tickets.edit', $registroTicket->id)}}" class="btn  edit-item-btn"><i
                                                class="ri-pencil-fill align-bottom text-muted"></i></a>
                                        <a href="{{route('tickets.destroy', $registroTicket->id)}}" class="btn  remove-item-btn"><i
                                                class="ri-delete-bin-fill align-bottom text-muted"></i></a>
                                    </td> --}}
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
