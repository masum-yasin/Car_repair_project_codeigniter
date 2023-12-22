<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter'=>'authGuard']);
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
$routes->get('/mechanist/delete/(:num)','MechanistController::delete/$1');
$routes->get('/mechanist/edit/(:num)','MechanistController::edit/$1');
$routes->post('/mechanist/update/(:num)','MechanistController::update/$1');


// Login Authencation System signup and login//
$routes->get('signup','SignupController::index');
$routes->match(['get','post'] ,'signup/store', 'SignupController::store');
$routes->get('/login','LoginController::index');
$routes->post('/loginuser', 'LoginController::login');
$routes->get('/signout', 'LoginController::logout');



// Frontend Data Show//
$routes->get('serviceall', 'Frontend\ServiceController::index');
$routes->post('service/(:num)', 'Frontend\ServiceController::show/$1');
// Customer routes Start//
$routes->get('/customer','CustomerController::index');
$routes->get('/customer/create','CustomerController::create');
$routes->post('/customer/store','CustomerController::store');
$routes->get('/customer/edit/(:num)','CustomerController::edit/$1');
$routes->get('/customer/delete/(:num)','CustomerController::delete/$1');
$routes->post('/customer/update/(:num)','CustomerController::update/$1');






