<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detalle del Ticket</title>
    <!-- Agrega la referencia a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Personaliza el estilo según sea necesario */
        body {
            padding-top: 20px;
        }
        button {
            margin-top: 20px;
        }
        @media print {
            
            
            
            /* Oculta el botón de imprimir al imprimir la página */
            button.print-hidden {
                display: none;
            }
            a.print-hidden {
                display: none;
            }
            .container {
                max-width: 100%;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-3 .no-print">
            </div>
            <div class="col-md-6">
                <h1 class="text-center">Detalle del Ticket</h1>

                <p><strong>Código del Ticket:</strong> {{ $ticket->codigo }}</p>
                <p><strong>Fecha y Hora:</strong> {{ $ticket->fecha_hora }}</p>

                <h2>Información de la Atención</h2>
                <p><strong>Fecha de Atención:</strong> {{ $atencion->fecha }}</p>
                <p><strong>Hora de Atención:</strong> {{ $horaAtencion->hora }}</p>
                <hr>
                <p><strong>Especialidad:</strong> {{ $especialidad->nombre }}</p>
                <p><strong>Médico:</strong> {{ $medico->nombre_completo }}</p>
                <p><strong>Consultorio:</strong> {{ $consultorio->nombre }}</p>
                <hr>
                <p><strong>Afiliado:</strong> {{ $afiliado->nombre_completo }}</p>
                <p><strong>CI:</strong> {{ $afiliado->ci }}</p>

                <div class="d-flex align-items-baseline print-hidden">
                    <button class="btn btn-success mr-2" onclick="window.print()">Imprimir</button>
                    <a href="{{ route('afiliados.index') }}"  class="btn btn-danger">Volver</a>
                </div>
                
            </div>
            <div class="col-md-3 .no-print"></div>
        </div>
    </div>
    <div class="container .no-print"></div>

    <!-- Agrega la referencia a Bootstrap JS y Popper.js (requerido por Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
