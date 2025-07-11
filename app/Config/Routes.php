<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Ikanku::index');
$routes->get('/detail/(:segment)','Ikanku::detail/$1');
$routes->get('/ikanku/tambah','Ikanku::create');
$routes->post('/ikanku/save','Ikanku::save');
$routes->post('/ikanku/del/(:num)','Ikanku::delete/$1');
$routes->get('/ikanku/edit/(:segment)','Ikanku::edit/$1');
$routes->post('/ikanku/update/(:num)','Ikanku::update/$1');
$routes->get('/tentang','Ikanku::tentangkami');
$routes->get('/acara','Acara::index_acara');
$routes->get('/acara/detail/(:segment)','Acara::detail_acara/$1');
$routes->get('/acara/tambah','Acara::create_acara');
$routes->post('/acara/save','Acara::save_acara');
$routes->post('/acara/del/(:num)','Acara::delete/$1');
$routes->get('/acara/edit/(:segment)','Acara::edit_acara/$1');
$routes->post('/acara/update/(:num)','Acara::update/$1');
$routes->get('/kontak','Ikanku::kontak');
