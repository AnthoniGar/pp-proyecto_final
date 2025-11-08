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

// rutas para mostrar datos de las tablas de la base de datos
$routes->get('estados','EstadosController::index');


//rutas para agregar datos a las tablas de la base de datos
$routes->post('agregar_estado','EstadosController::agregarEstado');


//rutas para eliminar datos de las tablas de la base de datos
$routes->get('eliminar_estado/(:num)','EstadosController::eliminarEstado/$1');


//rutas para buscar datos de las tablas de la base de datos
$routes->get('buscar_estado/(:num)','EstadosController::buscarEstado/$1');


//rutas para modificar datos de las tablas de la base de datos
$routes->post('modificar_estado','EstadosController::modificarEstado');