
<link rel="stylesheet" href="<?= base_url('css/tabla.css') ?>">



    <h2 style="text-align:center;">Lista de Productos</h2>
    <table>
        <thead>
            <tr>
                
                <th>Nombre</th>
                
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($productos)): ?>
                <?php foreach($productos as $p): ?>
                    <tr>
                        
                        <td><a href="<?php echo base_url();?>productos/detalle/<?=$p->id?>"><?= esc($p->nombre) ?></a></td>                        
                        <td>$<?= number_format($p->precio, 2) ?></td>
                        <td><?= esc($p->stock) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">Tabla vacía.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
    
