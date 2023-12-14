<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registrar Tickets</title>
</head>

<body>
    <div class="container">
        <div class="row" style="height:50px"></div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <!-- En resources/views/registrar_ticket.blade.php -->
                <form action="{{ route('afiliados.registrar.post') }}" method="post">
                    @csrf
                    <input type="hidden" name="afiliado_id" value="{{ $afiliado->id }}">
                    
                    <input type="hidden" name="medico_id" value="{{ $medico->id }}">
                   
                    
                    {{-- <label for="">Codigo</label>
                    <input type="text" name="codigo">
                    <br>
                    <label for="">Fecha Hora</label>
                    <input class="form-control" type="date" name="fecha">
                    <br>
                    <label for="">estado</label>
                    <input type="text" name="estado">
                    <br>
                    <label for="">obseracion</label>
                    <input type="text" name="observacion">
                    <br>
                    <label for="">atencion</label>
                    <input type="text" name="atencion_id"> --}}
                    <label for="">obseracion</label>
                    <input type="text" name="observacion">
                    <br>
                    <label for="">hora atencion</label>
                    <select name="horaAtencion_id" id="" class="form-select">
                        <option value="">Seleccione la hora</option>
                    </select>
                    <input type="text" name="horaAtencion_id">
                    <h2>Registrar Ticket</h2>

                    <p>Hospital: {{ $hospital->nombre}}</p>
                    <p>Especialidad: {{ $especialidad->nombre }}</p>
                    <p>Medico: {{ $medico->nombre_completo }}</p>
                    <p>Afiliado: {{ $afiliado->nombre_completo }}</p>
                    <p>CI: {{ $afiliado->ci }}</p>
                    
                    {{-- <label for="" class="form-label">Fecha</label>
                    <input type="date" class="form-control">

                    <label for="">Hora</label>
                    <input type="time" class="form-control"> --}}
                    <br>
                    <button type="submit" class="btn btn-success">Registrar Ticket</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>

</html>


