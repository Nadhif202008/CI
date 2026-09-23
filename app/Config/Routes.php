<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/detail/(:num)', 'Home::detail/$1');

// Authentication Routes
$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::processLogin');
$routes->get('/logout', 'Auth::logout');

// Admin CRUD Routes
$routes->get('/admin', 'Admin::index');
$routes->get('/admin/create', 'Admin::create');
$routes->post('/admin/store', 'Admin::store');
$routes->get('/admin/edit/(:num)', 'Admin::edit/$1');
$routes->post('/admin/update/(:num)', 'Admin::update/$1');
$routes->get('/admin/delete/(:num)', 'Admin::delete/$1');
