{{-- add new employee modal start --}}
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control"
                                placeholder="Nombre Especialidad" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <label for="color">Color</label>
                            <input type="text" name="color" id="color" class="form-control"
                                placeholder="Ingrese Color" required>
                        </div>
                        <div class="col-lg">
                            <label for="cantidad_ticket">Cantidad Ticket</label>
                            <input type="number" name="cantidad_ticket" id="cantidad_ticket" class="form-control"
                                placeholder="Cantidad de tickets" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" id="add_employee_btn" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- add new employee modal end --}}
