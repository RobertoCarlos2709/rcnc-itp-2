

<div id="addProductModal" class="modal fade">
<div class="modal-dialog">
<div class="modal-content">
<form method="POST" name="add_product" id="add_product" onsubmit="return false">
<div class="modal-header">						
<h4 class="modal-title">Agregar Usuario</h4>
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
</div>
<div class="modal-body">				
<div class="form-group">
<label>Nombre</label>
<input type="text" name="firstname" id="firstname" class="form-control" required>
</div>
<div class="form-group">
<label>Apellido</label>
<input type="text" name="lastname" id="lastname" class="form-control" required>
</div>
<div class="form-group">
<label>Correo</label>
<input type="email" name="email" id="email" class="form-control" required>
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

<div id="respuesta"></div> 