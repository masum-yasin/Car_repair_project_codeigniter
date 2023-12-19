<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/booking_table', 'BookingController::index');
$routes->get('/contact_form', 'ContactController::index');
// service routes start//
$routes->get('/service', 'ServiceController::index');
$routes->get('/service/create', 'ServiceController::create');
$routes->post('/service/store', 'ServiceController::store');
$routes->get('/service/delete/(:num)', 'ServiceController::delete/$1');
$routes->get('/service/edit/(:num)', 'ServiceController::edit/$1');
$routes->post('/service/update/(:num)', 'ServiceController::update/$1');
// service routes ending//
// machanist routes start//
$routes->get('/machanist','MechanistController::index');
$routes->get('/machanist/create','MechanistController::create');
$routes->post('/machanist/store','MechanistController::store');
$routes->get('/mechamist/edit','MechanistController::edit');

