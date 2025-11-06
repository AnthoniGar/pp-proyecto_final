<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('iniciar_sesion','UsuariosController::index');
$routes->get('cerrar_sesion','UsuariosController::cerrarSesion');

$routes->get('menu_admin','Home::verMenuAdmin');
$routes->get('menu_secre','Home::verMenuSecre');
$routes->get('menu_ventas','Home::verMenuVentas');


