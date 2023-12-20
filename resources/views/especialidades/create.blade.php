@extends('home')

@section('contenido')
    <div class="card">
        <h3 class="card-header">Registro Nuevo</h3>
        <div class="card-body">
            
                   
                        <form action="{{route('especialidades.store')}}" method="POST">
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
                                <label for="" class="form-label">Color</label>
                                <input type="text" name="color" id="" class="form-control" placeholder="Ingrese Color"
                                    aria-describedby="helpId" />
                                </div>
                          <div class="col-md-4">
                                
                           
                                <label for="" class="form-label">Cantidad de Ticket</label>
                                <input type="text" name="cantidad_ticket" id="" class="form-control" placeholder="Ingrese cantidad de Tickets"
                                    aria-describedby="helpId" />
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
