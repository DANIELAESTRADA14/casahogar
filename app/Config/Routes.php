<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/productos/registro', 'Productos::index');
$routes->post('/productos/registro/nuevo','Productos::registrar');
$routes->get('/animales/registro', 'Animales::index');
$routes->post('/animales/registro/nuevo','Animales::animales');
$routes->get('/productos/listado','Productos::buscar');
$routes->get('/animales/listado','Animales::buscar');
$routes->delete('/productos/eliminar/(:num)','Productos::eliminar/$1');
$routes->delete('/animales/eliminar/(:num)','Animales::eliminar/$1');
$routes->post('/productos/editar/(:num)','Productos::editar/$1');
$routes->post('/animales/editaranimal/(:num)','Animales::editaranimal/$1');

$routes->get('/perros', 'Animales::tipo1');
$routes->get('/gatos', 'Animales::tipo2');
$routes->get('/aves', 'Animales::tipo3');
$routes->get('/equinos', 'Animales::tipo4');
$routes->get('/reptiles', 'Animales::tipo5');
$routes->get('/alimentos', 'Productos::alimentos');
$routes->get('/aseo', 'Productos::aseo');
$routes->get('/accesorios', 'Productos::accesorios');
$routes->get('/salud', 'Productos::salud');
$routes->get('/juguetes', 'Productos::juguetes');

//RUTAS DEL API
$routes->get('/miercoles/v1/productos', 'APIProductos::buscarProductos');
$routes->get('/miercoles/v1/productos/(:num)', 'APIProductos::encontrarProductos/$1');
$routes->post('/miercoles/v1/productos', 'APIProductos::agregarProducto');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
