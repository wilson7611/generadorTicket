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
                    <select class="form-select" name="horaAtencion_id" id="">
                        <option value="">Horas Disponibles</option>
                        @foreach ($horasDisponibles as $horas)
                            <option value="{{$horas->id}}">{{$horas->hora}}</option>
                        @endforeach
                    </select>
                    <p>Hospital: {{ $hospital->nombre }}</p>
                    <p>Especialidad: {{ $especialidad->nombre }}</p>
                    <p>Medico: {{ $medico->nombre_completo }}</p>
                    <p>Afiliado: {{ $afiliado->nombre_completo }}</p>
                    <p>CI: {{ $afiliado->ci }}</p>
                    <br>
                    <button type="submit" class="btn btn-success">Registrar Ticket</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>
