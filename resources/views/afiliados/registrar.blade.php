<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registrar Tickets</title>
</head>

<body>
    <div class="container">
        <div class="row" style="height:50px"></div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="{{ route('afiliados.registrar.post') }}" method="post">
                    @csrf
                    <input type="hidden" name="afiliado_id" value="{{ $afiliado->id }}">
                    <input type="hidden" name="medico_id" value="{{ $medico->id }}">
                    
                    <br>
                    {{-- <h3></h3> --}}

                    <h2>Registrar Ticket</h2>
                    <br>
                    <select class="form-select" name="horaAtencion_id" id="" required>
                        <option value="">Horas Disponibles</option>
                        @foreach ($horasDisponibles as $horas)
                            <option value="{{ $horas->id }}">{{ $horas->hora }}</option>
                        @endforeach
                    </select>
                    <br>
                    <p>Hospital: {{ $hospital->nombre }}</p>
                    <p>Especialidad: {{ $especialidad->nombre }}</p>
                    <p>Tickets Disponibles: {{ $especialidad->cantidad_ticket }}</p>
                    <p>Medico: {{ $medico->nombre_completo }}</p>
                    <p>Afiliado: {{ $afiliado->nombre_completo }}</p>
                    <p>CI: {{ $afiliado->ci }}</p>
                    <br>
                    <button type="submit" class="btn btn-success">Registrar Ticket</button>
                    <a class="btn btn-danger" href="{{ route('afiliados.index') }}">
                        Cancelar
                    </a>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



    <!-- Código existente de la vista -->

@if(isset($atencion) && isset($ticket) && isset($medico) && isset($especialidad))
<!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ticketModal" id="openTicketModal">
    Ver Ticket
</button>

<!-- Modal -->
<div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ticket de Atención</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenido del ticket -->
                <p>Fecha y Hora de Atención: {{ $atencion->fecha }}</p>
                <p>Estado de la Atención: {{ $atencion->estado }}</p>
                <p>Médico: {{ $medico->nombre }}</p>
                <p>Especialidad: {{ $especialidad->nombre }}</p>

                <hr>

                <p>Código del Ticket: {{ $ticket->codigo }}</p>
                <p>Fecha y Hora del Ticket: {{ $ticket->fecha_hora }}</p>
                <p>Estado del Ticket: {{ $ticket->estado }}</p>
                <!-- Agrega más detalles según sea necesario -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para abrir automáticamente el modal -->
<script>
    $(document).ready(function() {
        $('#openTicketModal').click(); // Abre el modal al cargar la página
    });
</script>
@endif

<!-- Resto del código de la vista -->
</body>

</html>
