<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('/productos', 'Productos::index');
$routes->get('productos/detalle/(:num)', 'Productos::detalle/$1');


// Login
$routes->get('login', 'Login::index');
$routes->post('login/auth', 'Login::auth');

// Registro
$routes->get('registro', 'Registro::index');
$routes->post('registro/crear', 'Registro::crear');

// Logout
$routes->get('logout', 'Login::logout');




// Productos
$routes->get('productos', 'Productos::index');
$routes->get('productos/detalle/(:num)', 'Productos::detalle/$1');
$routes->get('productos/nuevo', 'Productos::nuevo');
$routes->post('productos/nuevo', 'Productos::nuevo');
$routes->post('productos/guardar', 'Productos::guardar');
$routes->get('productos/eliminar/(:num)', 'Productos::eliminar/$1');
