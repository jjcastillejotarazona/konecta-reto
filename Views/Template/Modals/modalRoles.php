<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>-->

<!-- Modal -->
<div class="modal fade" id="modalFormRol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Rol</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="tile">
            <div class="tile-body">
              <form id="formRol" name="formRol">
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Nombre del Rol" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Descripción</label>
                  <textarea id="txtDescripcion" name="txtDescripcion" class="form-control" rows="2" placeholder="Descripción del Rol" required></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Estado</label>
                    <select class="form-control" id="listStatus" name="listStatus">
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                  </div>
                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit">
                      <i class="fa fa-fw fa-lg fa-check-circle"></i>
                        Guardar
                    </button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</a>
                  </div>
              </form>
            </div>

          </div>
      </div>
    </div>
  </div>
</div>