<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Ikanku::index');
$routes->get('/tentang','Ikanku::tentangkami');
$routes->get('/acara','Ikanku::acara');
$routes->get('/kontak','Ikanku::kontak');
$routes->get('/detail/(:segment)','Ikanku::detail/$1');
$routes->get('/ikanku/tambah','Ikanku::create');
$routes->post('/ikanku/save','Ikanku::save');
$routes->post('/ikanku/del/(:num)','Ikanku::delete/$1');
$routes->get('/ikanku/edit/(:segment)','Ikanku::edit/$1');
$routes->post('/ikanku/update/(:num)','Ikanku::update/$1');