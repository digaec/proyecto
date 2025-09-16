<link rel="stylesheet" href="<?= base_url('css/form_nuevo.css') ?>">

    <div class="form-container">
        <h2>Agregar Nuevo Producto</h2>
        <form action="<?php echo base_url();?>productos/guardar" method="post" autocomplete="off">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="text" id="codigo" name="codigo" required>
            </div>
            
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" id="precio" name="precio" required pattern="[0-9]+(\.[0-9]{1,2})?">
            </div>
            
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" id="stock" name="stock" required pattern="[0-9]+">
            </div>
            
            <button type="submit" class="btn-submit">Guardar Producto</button>
        </form>
        
        
    </div>
