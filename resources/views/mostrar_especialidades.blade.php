@extends('layouts.app')
@section('content')
    <div class="container mt-5 ">
        <div class="d-flex justify-content-between">
            <h3 class="">Bienvenido, {{ $afiliado->nombre_completo }}</h3>
            <a class="btn btn-info text-white" href="{{ route('afiliados.index') }}">Volver</a>
        </div>
        <hr>
        <br>
        <div class="row">
            @foreach ($medicos as $medico)
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-animate bg-primary">
                        <div class="card-body">
                            @if ($medico->especialidad->cantidad_ticket > 0)
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                                            {{ $medico->hospital->nombre }}</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-3">
                                    <div>
                                        <h4 class="fs-22 fw-bold ff-secondary text-white mb-3"><span class="counter-value"
                                                data-target="559.25"></span>{{ $medico->especialidad->nombre }}
                                        </h4>
                                        <h4 class="fs-15 fw-bold ff-secondary text-white mb-3">Médico:
                                            {{ $medico->nombre_completo }}</h4>
                                        <h4 class="fs-15 fw-bold ff-secondary text-white mb-4">Nro Ticket:
                                            {{ $medico->especialidad->cantidad_ticket }}</h4>
                                        <!-- Enlace para registrar -->
                                        <a class="btn btn-success"
                                            href="{{ route('afiliados.registrar', ['afiliado' => $afiliado->id, 'especialidad' => $medico->especialidad->id, 'medico' => $medico->id, 'hospital' => $medico->hospital->id]) }}">
                                            Registrar
                                        </a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-light rounded fs-3">
                                            <i class="bx bx-dollar-circle text-white"></i>
                                        </span>
                                    </div>
                                </div>
                            @else
                                <h3 class="text-uppercase fw-bold text-white-50 text-truncate mb-0">
                                    {{ $medico->especialidad->nombre }}</h3>
                                <br>
                                <p class="text-white">Esta especialidad no tiene tickets disponibles.</p>
                            @endif
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->
            @endforeach

        </div>
    </div>
    @endsection
