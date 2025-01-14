<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/program', 'Program::index');

$routes->get('/about', 'About::index');

$routes->get('/contact', 'Contact::index');

$routes->get('/donate', 'Donate::index');
$routes->post('/donate/add', 'Donate::add');
$routes->get('notification', 'MessageController::showSweetAlertMessages');

$routes->get('/cek', 'cekDonasi::index');
$routes->get('/cekdonasi/search', 'CekDonasi::search');

$routes->get('/greatestofalltime', 'Credits::index');