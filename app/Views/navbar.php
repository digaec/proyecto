<link rel="stylesheet" href="../css/navbar.css">

<nav class="navbar"> 
  <ul class="navbar-menu"> 
    <li class="titulo-navbar">
      <a href="<?= base_url('productos') ?>">Proyecto evaluación final</a>
    </li> 
    
    <li>
          <a href="<?= base_url('productos') ?>"  style="background-color: #blue; margin-left: 10px;">Productos
    </li>
    
    <?php if (session('tipo') === 'admin'): ?>    
    <li>
      
          <a href="<?= base_url('productos/nuevo') ?>" style="background-color: #blue; margin-left: 15px;">
                        Nuevo 
           </a>
      
		</li>								    
    <?php endif; ?>
		    
    <li>
      <a href="<?= base_url('logout') ?>"  style="background-color: #blue; margin-left: 15px;">
        Cerrar sesión
      </a>
	  </li>								
  </ul> 
</nav>
