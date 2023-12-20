@extends('home')

@section('contenido')
<div class="card">
    <h4 class="card-header"> Estas seguro que deseas Eliminar</h4>
    <div class="card-body">
        <form action="{{ route('especialidades.destroy',  $especialidad->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <!-- Otros campos y botones del formulario -->
            <button type="submit" class="btn btn-success">Si</button>
            <a href="{{route('especialidades.index')}}" class="btn btn-danger">No</a>
        </form>
    </div>
</div>


@endsection