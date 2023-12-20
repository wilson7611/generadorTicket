@extends('home')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Editar Registro</h3>
        <div class="card-body">
            
            <form action="{{route('medicos.update', $medico->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Nombre</label>
                            <input type="text" name="nombre_completo" id="" class="form-control"
                            value="{{$medico->nombre_completo}}"     placeholder="Ingrese nombre de la Especialidad" aria-describedby="helpId" />
                        </div>
                      
                            <div class="col-md-6">
                                <label for="" class="form-label">CI</label>
                                <input type="text" name="ci" id="" class="form-control"
                                value="{{$medico->ci}}"   placeholder="Ingrese Color" aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="row mt-5 ">
                            <div class="col-md-6">


                                <label for="" class="form-label">Especialidad</label>
                                <select class="form-select" name="especialidad_id" id="">
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}" {{ $especialidad->id == $medico->especialidad_id ? 'selected' : '' }}>
                                            {{ $especialidad->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">


                                <label for="" class="form-label">Hospital</label>
                                <select class="form-select" name="hospital_id" id="">
                                    @foreach ($hospitales as $hospital)
                                        <option value="{{ $hospital->id }}" {{ $hospital->id == $medico->hospital_id ? 'selected' : '' }}>
                                            {{ $hospital->nombre }}
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
