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

</body>

</html>
<div class="container">
    <div class="row" style="height: 200px">
        <ul
            class="nav justify-content-end  "
        >
            
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
        </li>
        </ul>
        
    </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!-- resources/views/afiliados/index.blade.php -->
            <form action="{{ route('afiliados.validar') }}" method="post">
                @csrf
                <label for="ci" class="form-label">Ingrese Cedula de Identidad del Afiliado:</label>
                <input type="text" name="ci" class="form-control" value="26683871" autofocus required>
                <br>
                <button type="submit" class="btn btn-success">Validar Afiliado</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
