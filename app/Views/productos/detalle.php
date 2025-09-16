<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto - <?= esc($producto->nombre) ?></title>
    <style>
        
    </style>
</head>
<body>
    <div class="container">
        <h2>Detalle del Producto</h2>
        
        <?php if(isset($producto) && !empty($producto)): ?>
            <div class="producto-info">
                <p><strong>ID:</strong> <?= esc($producto->id) ?></p>
                <p><strong>Código:</strong> <?= esc($producto->codigo) ?></p>
                <p><strong>Nombre:</strong> <?= esc($producto->nombre) ?></p>
                <p><strong>Descripción:</strong> <?= esc($producto->descripcion) ?></p>
                <p><strong>Precio:</strong> $<?= number_format($producto->precio, 2) ?></p>
                <p>
                    <strong>Stock:</strong> 
                    <span class="<?= $producto->stock > 0 ? 'stock-disponible' : 'stock-agotado' ?>">
                        <?= esc($producto->stock) ?> unidades
                        <?= $producto->stock > 0 ? '✓ Disponible' : '✗ Agotado' ?>
                    </span>
                </p>
            </div>
            
            <div class="acciones">
                <a href="<?= base_url('productos') ?>" class="btn-volver">← Volver a la lista</a>
                
                
                <?php if(isset($esAdministrador) && $esAdministrador): ?>                    
                    <a href="<?= base_url('productos/eliminar/' . $producto->id) ?>" class="btn-volver" style="background-color: #dc3545; margin-left: 10px;">
                        🗑️ Eliminar
                    </a>
                <?php endif; ?>
            </div>
            
        <?php else: ?>
            <div class="alert ">                
                <a href="<?= base_url('productos') ?>" class="btn-volver">Volver</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>