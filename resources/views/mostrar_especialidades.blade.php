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
        <div class="row">
            @foreach ($medicos as $medico)
                <div class="col-md-3 mt-4 ">

                    <div class="card" style="width: 18rem;">
                        {{-- <img class="card-img-top" src="..." alt="Card image cap">
                   --}}
                        <div class="card-body">
                            <div>
                                @if($medico->especialidad->cantidad_ticket > 0)
                                <label for="">
                                    {{-- <input type="text" value="{{ $medico->especialidad->id }}"> --}}
                                    <h3>{{ $medico->especialidad->nombre }}</h3>
                                </label>
                                <p>Hospital: {{ $medico->hospital->nombre }}</p>
                                <p>Médico: {{ $medico->nombre_completo }}</p>
                                <p>Nro Ticket: {{ $medico->especialidad->cantidad_ticket }}</p>

                                <!-- Enlace para registrar -->
                                <a class="btn btn-success"
                                    href="{{ route('afiliados.registrar', ['afiliado' => $afiliado->id, 'especialidad' => $medico->especialidad->id, 'medico' => $medico->id, 'hospital' => $medico->hospital->id]) }}">
                                    Registrar
                                </a>
                                @else
                                    <h3>{{ $medico->especialidad->nombre }}</h3>
                                    <p>Esta especialidad no tiene tickets disponibles.</p>
                                @endif
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
