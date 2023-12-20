@extends('home')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Editar Registro</h3>
        <div class="card-body">
            
            <form action="{{ route('consultorios.update', $consultorio->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="" class="form-control"
                                value="{{ $consultorio->nombre }}" placeholder="Ingrese nombre del Consultorio" aria-describedby="helpId" />
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Hospital</label>
                                <select class="form-select" name="hospital_id" id="">
                                    @foreach ($hospitales as $hospital)
                                        <option value="{{ $hospital->id }}" {{ $hospital->id == $consultorio->hospital_id ? 'selected' : '' }}>
                                            {{ $hospital->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-success" value="Actualizar">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
