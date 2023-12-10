<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/booking_table', 'BookingController::index');
$routes->get('/contact_form', 'ContactController::index');
$routes->get('/service', 'ServiceController::index');
$routes->get('/service_create', 'ServiceController::create');

