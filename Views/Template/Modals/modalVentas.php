<!-- Modal -->
<div class="modal fade" id="modalFormVentas" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal">Nueva Venta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form id="formVentas" name="formVentas" class="form-horizontal">
              <input type="hidden" id="idProducto" name="idProducto" value="">
              <p class="text-primary">Los campos con asterisco (<span class="required">*</span>) son obligatorios.</p>
              <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                      <label class="control-label" for="listProducto">Nombre Producto <span class="required">*</span></label>
                      <select id="listProducto" name="listProducto" class="form-control" required="">
                       
                      </select>
                    </div>
                    <div class="form-group">
                      <label class="control-label" label="txtCantidad">Cantidad a vender</label>
                      <input type="number"  class="form-control" id="txtCantidad" name="txtCantidad" required>
                    </div>
                    <div class="form-group col-md-6">
                      <button id="btnActionForm" class="btn btn-primary btn-lg btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i><span id="btnText">Guardar</span></button>
                    </div> 
                    <div class="form-group col-md-6">
                      <button class="btn btn-danger btn-lg btn-block" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cerrar</button>
                    </div> 
                </div>
              </div>
            </form>
      </div>
    </div>
  </div>
</div>
