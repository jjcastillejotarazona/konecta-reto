<!-- Modal -->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <form id="formUsuario" name="formUsuario" class="form-horizontal">
                <input type="hidden" name="idUsuario" id="idUsuario" value="">
                <p class="text-primary">Todos los campos son obligatorios</p>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="control-label" for="txIdentificacion">Identificación</label>
                    <input class="form-control" type="text" id="txIdentificacion" name="txIdentificacion" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="control-label" for="txIdentificacion">Nombres</label>
                    <input class="form-control" type="text" id="txtNombre" name="txtNombre" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label" for="txtApellido">Apellidos</label>
                    <input class="form-control" type="text" id="txtApellido" name="txtApellido" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="control-label" for="txtTelefono">Telefono</label>
                    <input class="form-control" type="text" id="txtTelefono" name="txtTelefono" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label" for="txtEmail">Email</label>
                    <input class="form-control" type="email" id="txtEmail" name="txtEmail" required>
                  </div>
                </div>

                 <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="control-label" for="listRolid">Tipo usuario</label>
                    <select class="form-control" id="listRolid" name="listRolid" required>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label class="control-label" for="ListStatus">Estado</label>
                    <select class="form-control" id="ListStatus" name="ListStatus" required>
                      <option value="1">Activo</option>
                      <option value="2">Inactivo</option>
                    </select>
                  </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label class="control-label" for="txtPassword">Password</label>
                    <input class="form-control" type="password" id="txtPassword" name="txtPassword">
                  </div>
                </div>
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-primary" type="submit">
                      <i class="fa fa-fw fa-lg fa-check-circle"></i>
                        Guardar
                    </button>&nbsp;&nbsp;&nbsp;

                    <button id="btnActionForm" class="btn btn-danger" type="button" data-dismiss="modal">
                      <i class="fa fa-fw fa-lg fa-check-circle"></i>
                        Cerrar
                    </button>
                  </div>
              </form>
  
      </div>
    </div>
  </div>
</div>