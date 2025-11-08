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
$routes->get('pagos','PagosController::index');
$routes->get('tipos_usuarios','TipoUsuariosController::index');
$routes->get('usuarios','UsuarioController::index');

//rutas para agregar datos a las tablas de la base de datos
$routes->post('agregar_estado','EstadosController::agregarEstado');
$routes->post('agregar_pago','PagosController::agregarPago');
$routes->post('agregar_tusuario','TipoUsuariosController::agregarTusuario');
$routes->post('agregar_usuario','UsuarioController::agregarUsuario');

//rutas para eliminar datos de las tablas de la base de datos
$routes->get('eliminar_estado/(:num)','EstadosController::eliminarEstado/$1');
$routes->get('eliminar_pago/(:num)','PagosController::eliminarPago/$1');
$routes->get('eliminar_tusuario/(:num)','TipoUsuariosController::eliminarTusuario/$1');
$routes->get('eliminar_usuario/(:num)','UsuarioController::eliminarUsuario/$1');

//rutas para buscar datos de las tablas de la base de datos
$routes->get('buscar_estado/(:num)','EstadosController::buscarEstado/$1');
$routes->get('buscar_pago/(:num)','PagosController::buscarPago/$1');
$routes->get('buscar_tusuario/(:num)','TipoUsuariosController::buscarTusuario/$1');
$routes->get('buscar_usuario/(:num)','UsuarioController::buscarUsuario/$1');

//rutas para modificar datos de las tablas de la base de datos
$routes->post('modificar_estado','EstadosController::modificarEstado');
$routes->post('modificar_pago','PagosController::modificarPago');
$routes->post('modificar_tusuario','TipoUsuariosController::modificarTusuario');
$routes->post('modificar_usuario','UsuarioController::modificarUsuario');