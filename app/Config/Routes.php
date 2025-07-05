<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/clientes', 'Clientes::index');
$routes->get('/clientes/criar', 'Clientes::criar');
$routes->post('/clientes/salvar', 'Clientes::salvar');
$routes->get('/clientes/editar/(:num)', 'Clientes::editar/$1');
$routes->post('/clientes/atualizar/(:num)', 'Clientes::atualizar/$1');
$routes->get('/clientes/excluir/(:num)', 'Clientes::excluir/$1');
