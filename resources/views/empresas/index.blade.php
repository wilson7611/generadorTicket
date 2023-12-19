@extends('home')
@section('contenido')
@include('empresas.nuevo')
@include('empresas.edit')

<body class="bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-danger d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Gestionar </h3>
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmpresaModal"><i
                                class="bi-plus-circle me-2"></i>Agregar Nuevo Registro</button>
                    </div>
                    <div class="card-body" id="show_all_empresas">
                        <h1 class="text-center text-secondary my-5">Cargando...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
         <!-- Bootstrap JavaScript Libraries -->
         <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
         <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
         <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
         <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
         <script>
               $(function() {
     
     // agregar nueva solicitud ajax de empleado
     $("#add_empresa_form").submit(function(e) {
         e.preventDefault();
         const fd = new FormData(this);
         $("#add_empresa_btn").text('Registrando...');
         $.ajax({
             url: '{{ route('store') }}',
             method: 'post',
             data: fd,
             cache: false,
             contentType: false,
             processData: false,
             dataType: 'json',
             success: function(response) {
                 if (response.status == 200) {
                     Swal.fire(
                         'Agregado!',
                         'Registro Exitoso!',
                         'success'
                     )
                     $("#add_empresa_form")[0].reset();
                     $("#add_empresa_btn").text('Agregar');
                     fetchAllEmpresas();
                     setTimeout(function() {
                    $("#addEmpresaModal").modal('hide');
                         }, 100);
                 }   
             }
         });
     });
     
     // Editar la solicitud ajax del empleado
     $(document).on('click', '.editIcon', function(e) {
         e.preventDefault();
         let id = $(this).attr('id');
         $.ajax({
             url: '{{ route('edit') }}',
             method: 'get',
             data: {
                 id: id,
                 _token: '{{ csrf_token() }}'
             },
             success: function(response) {
                 console.log(response);
                 $("#id").val(response.id);
                 $("#nombre").val(response.nombre);
                 $("#propietario").val(response.propietario);
             }
         });
     });
     
     // Actualizar la solicitud ajax del empleado
     $("#edit_empresa_form").submit(function(e) {
         e.preventDefault();
         const fd = new FormData(this);
         $("#edit_empresa_btn").text('Actualizando...');
         $.ajax({
             url: '{{ route('update') }}',
             method: 'post',
             data: fd,
             cache: false,
             contentType: false,
             processData: false,
             dataType: 'json',
             success: function(response) {
                 if (response.status == 200) {
                     Swal.fire(
                         'Actualizado!',
                         'Actualizado Correctamente!',
                         'success'
                     )
                     fetchAllEmpresas();
                 }
                 $("#edit_empresa_btn").text('Actualizar');
                 $("#edit_empresa_form")[0].reset();
                 $("#editEmpresaModal").modal('hide');
             }
         });
     });
     
     // Eliminar la solicitud ajax de la empresa
     $(document).on('click', '.deleteIcon', function(e) {
         e.preventDefault();
         let id = $(this).attr('id');
         let csrf = '{{ csrf_token() }}';
         Swal.fire({
             title: 'Esta seguro que desea eliminar?',
             text: "No podras revertir esto!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Si, Eliminar!'
         }).then((result) => {
             if (result.isConfirmed) {
                 $.ajax({
                     url: '{{ route('delete') }}',
                     method: 'delete',
                     data: {
                         id: id,
                         _token: csrf
                     },
                     success: function(response) {
                         console.log(response);
                         Swal.fire(
                             'Eliminado!',
                             'Su archivo ha sido eliminado.',
                             'success'
                         )
                         fetchAllEmpresas();
                     }
                 });
             }
         })
     });
     
     // recuperar la solicitud ajax de todos los empleados
     fetchAllEmpresas();
     
     function fetchAllEmpresas() {
         $.ajax({
             url: '{{ route('fetchAll') }}',
             method: 'get',
             success: function(response) {
                 $("#show_all_empresas").html(response);
                 $("table").DataTable({
                     order: [0, 'asc']
                 });
             }
         });
     }
     });
         </script>
@endsection