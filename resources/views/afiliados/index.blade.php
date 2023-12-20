@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="height: 200px">
            <ul class="nav justify-content-end  ">

                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('login') }}">Login</a>
                </li>
            </ul>

        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                
            <form action="{{route('afiliados.validar')}}" method="POST">
                <div class="input-group countdown-input-group mx-auto my-4">
                    
                        @csrf
                        <input style="height: 50px; width:180px; font-size:20px" type="text" class="form-control border-light shadow"
                            placeholder="Ingrese numero de Carnet" aria-label="search result"
                            aria-describedby="button-email" name="ci" autofocus>
                        <button style="font-size:20px;" class="btn btn-success" type="submit" id="button-email">Validar<i
                                class="ri-send-plane-2-fill align-bottom ms-2"></i></button>
                    
                </div>
            </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>






 
@endsection
