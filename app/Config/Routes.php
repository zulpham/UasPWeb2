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