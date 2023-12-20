@extends('home')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Registro Nuevo</h3>
        <div class="card-body">
            
                   
                        <form action="{{route('consultorios.store')}}" method="POST">
                            @csrf 
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10">
                               <label for="" class="form-label">Nombre</label>
                            <input type="text" name="nombre" id="" class="form-control" placeholder="Ingrese nombre de la Especialidad"
                                aria-describedby="helpId" />
                            </div>
                           <div class="row mt-3">
                            <div class="col-md-4">
                                <select name="hospital_id" id="" class="form-select">
                                    <option value="">Elige un hospital</option>
                                    @foreach ($hospitales as $hospital)
                                        <option value="{{$hospital->id}}">{{$hospital->nombre}}</option>
                                    @endforeach
                                </select>
                          
                          
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
