@extends('home')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Editar Registro</h3>
        <div class="card-body">
            
            <form action="{{route('horasAtenciones.update', $horasAtenciones->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="hora" id="" class="form-control"
                            value="{{$horasAtenciones->hora}}"     placeholder="Ingrese nombre de la Especialidad" aria-describedby="helpId" />
                        </div>
                      
                            <div class="col-md-6">
                                <label for="" class="form-label">disponible</label>
                                <input type="text" name="disponible" id="" class="form-control"
                                value="{{$horasAtenciones->disponible}}"   placeholder="Ingrese Color" aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="row mt-5 ">
                            <div class="col-md-6">


                                <label for="" class="form-label">Especialidad</label>
                                <select class="form-select" name="especialidad_id" id="">
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}" {{ $especialidad->id == $horasAtenciones->especialidad_id ? 'selected' : '' }}>
                                            {{ $especialidad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">


                                <label for="" class="form-label">Hospital</label>
                                <select class="form-select" name="consultorio_id" id="">
                                    @foreach ($consultorios as $consultorio)
                                        <option value="{{ $consultorio->id }}" {{ $consultorio->id == $horasAtenciones->hospital_id ? 'selected' : '' }}>
                                            {{ $consultorio->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mt-4 ">

                            <div class="col-md-4">
                                <input type="submit" class="btn btn-success " value="Registrar">
                            </div>
                            <div class="col-md-4"></div>
                        </div>
            </form>
        </div>
    </div>
@endsection
