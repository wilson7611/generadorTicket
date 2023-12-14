<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <br>
        <h3>Bienvenido, {{ $afiliado->nombre_completo }}</h3>
        <hr>
        <h2>@foreach ($horasDisponibles as $horas)
            <li>{{$horas->id}}</li>
            <li>{{$horas->hora}}</li>
            <li>{{$horas->consultorio_id}}</li>
        @endforeach</h2>
        <div class="row">
            @foreach ($medicos as $medico)
                <div class="col-md-3 mt-4 ">
                    <div class="card" style="width: 18rem;">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap">
                   --}}
                        <div class="card-body">
                            <div>
                                <h3>{{ $medico->especialidad->nombre }}</h3>
                                <p>Médico: {{ $medico->nombre_completo }}</p>
                                <p>Hospital: {{ $medico->hospital->nombre }}</p>
                                <p>Nro Ticket: {{ $medico->especialidad->cantidad_ticket }}</p>

                                <!-- Enlace para registrar -->
                                <a class="btn btn-success"
                                    href="{{ route('afiliados.registrar', ['afiliado' => $afiliado->id, 'especialidad' => $especialidad->id, 'medico' => $medico->id, 'hospital' => $hospital->id, 'horasDisponibles'=>$horasDisponibles]) }}">
                                    Registrar
                                </a>
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
