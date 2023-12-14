<!-- En resources/views/registrar_ticket.blade.php -->
<form action="{{ route('afiliados.registrar.post') }}" method="post">
    @csrf
    <input type="hidden" name="afiliado_id" value="{{ $afiliado->id }}">
    <input type="hidden" name="especialidad_id" value="{{ $especialidad->id }}">
    
    <h2>Registrar Ticket</h2>

    <p>Afiliado: {{ $afiliado->nombre_completo }}</p>
    <p>Especialidad: {{ $especialidad->nombre }}</p>
    
    <!-- Otros campos del formulario para el ticket -->

    <button type="submit">Registrar Ticket</button>
</form>