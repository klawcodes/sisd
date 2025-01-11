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

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::index');
$routes->get('/member', 'Member::index');
$routes->post('/member', 'Member::index');
$routes->post('/login/logout', 'Login::logout');  // Tambahkan ini
