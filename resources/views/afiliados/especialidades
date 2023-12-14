<!-- resources/views/afiliados/especialidades.blade.php -->
<h1>Bienvenido, {{ $afiliado->nombre_completo }}</h1>

<div class="card-deck">
    @foreach($especialidades as $especialidad)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $especialidad->nombre }}</h5>
                <p class="card-text">{{ $especialidad->descripcion }}</p>
                <a href="{{ route('afiliados.registrar', ['afiliado' => $afiliado, 'especialidad' => $especialidad]) }}" class="btn btn-primary">Registrar</a>
            </div>
        </div>
    @endforeach
</div>
