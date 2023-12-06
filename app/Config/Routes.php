<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/booking_table', 'BookingController::index');
$routes->get('/contact_form', 'ContactController::index');

