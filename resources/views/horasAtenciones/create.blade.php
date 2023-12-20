@extends('home')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Registro Nuevo</h3>
        <div class="card-body">
            <form action="{{ route('horasAtenciones.store') }}" method="POST">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="" class="form-label">Hora</label>
                            <input type="time" name="hora" id="" class="form-control"
                                placeholder="Ingrese nombre Completo" aria-describedby="helpId" />
                        </div>
                      
                            <div class="col-md-6">
                                <label for="" class="form-label">Disponible</label>
                                <input type="text" name="disponible" id="" class="form-control"
                                    placeholder="Ingrese cedula de identidad" aria-describedby="helpId" />
                            </div>
                        </div>
                        <div class="row mt-5 ">
                            <div class="col-md-6">

                                <select class="form-select" name="especialidad_id" id="">
                                    <option value="">Elige una especialidad</option>
                                    @foreach ($especialidades as $especialidad)
                                        <option value="{{ $especialidad->id }}">{{$especialidad->nombre}}</option>
                                    @endforeach
                                </select>
                                
                            </div>

                     
                        <div class="col-md-6">

                            <select class="form-select" name="consultorio_id" id="">
                                <option value="">Elige un consultorio</option>
                                @foreach ($consultorios as $consultorio)
                                    <option value="{{ $consultorio->id }}">{{$consultorio->nombre}}</option>
                                @endforeach
                            </select>
                            
                        </div>
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

    </div>
    </div>
@endsection
