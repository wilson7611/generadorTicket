<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registro de Fichaje</title>
</head>

<body>
    <div class="container">
        <div class="row" style="height: 100px;"></div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <!-- resources/views/registrar_ticket.blade.php -->
                <form action="{{ route('registrarTicket') }}" method="post">
                    @csrf
                    {{-- <input type="hidden" name="afiliado_id" value="{{ $afiliado->id }}"> --}}

                    <label for="especialidad">Seleccione Especialidad:</label>
                    <select name="especialidad_id" required>
                        @foreach ($especialidades as $especialidad)
                            <option value="{{ $especialidad->id }}">{{ $especialidad->nombre }}</option>
                        @endforeach
                    </select>

                    <!-- Otros campos del formulario, como médico, hora, etc. -->

                    <button type="submit">Registrar Ticket</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
