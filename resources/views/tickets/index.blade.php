<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th scope="col">Codigo</th>
                                <th scope="col">Fecha Hora</th>
                                <th scope="col">Estado</th>
                                <th>Observacion</th>
                                <th>Atencion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tickets as $ticket)
                                <tr class="">
                                    <td scope="row">{{ $ticket->id }}</td>
                                    <td scope="row">{{ $ticket->codigo }}</td>
                                    <td scope="row">{{ $ticket->fecha_hora }}</td>
                                    <td scope="row">{{ $ticket->estado }}</td>
                                    <td scope="row">{{ $ticket->observacion }}</td>
                                    <td scope="row">{{ $ticket->atencion->estado }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
