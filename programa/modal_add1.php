

<div id="addProductModal1" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST" name="add_product" id="add_product" onsubmit="return false">
<div class="modal-header">						
<h4 class="modal-title">Agregar Producto</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">				
<div class="form-group">
<label>Nombre del producto</label>
<input type="text" name="nombrep" id="nombrep" class="form-control" required>
</div>
<div class="form-group">
<label>Marca</label>
<input type="text" name="marcap" id="marcap" class="form-control" required>
</div>
<div class="form-group">
<label>Costo</label>
<input type="text" name="costop" id="costop" class="form-control" required>
</div>					
</div>
<div class="modal-footer">
<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
<input id="js-enviar" type="submit" class="btn btn-success" value="Guardar datos">
</div>
</form>
</div>
</div>
</div>

<div id="respuesta1"></div> 