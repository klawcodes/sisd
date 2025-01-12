<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Home Barang
$routes->get('/program', 'Program::index');
// Home Barang
$routes->get('/about', 'About::index');
// Home Barang
$routes->get('/contact', 'Contact::index');

$routes->get('/donate', 'Donate::index');
$routes->post('/donate/add', 'Donate::add');
$routes->get('notification', 'MessageController::showSweetAlertMessages');

$routes->get('/cek', 'cekDonasi::index');
