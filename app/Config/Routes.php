<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Admin::dashboard');

$routes->get('users', 'Users::index');
$routes->post('users', 'Users::index');
$routes->get('users/add', 'Users::add');
$routes->post('users/add', 'Users::add');
$routes->get('users/edit/(:num)', 'Users::edit/$1');
$routes->post('users/edit/(:num)', 'Users::edit/$1');

$routes->get('projects', 'Projects::index');
$routes->post('projects', 'Projects::index');
$routes->get('projects/add', 'Projects::add');
$routes->post('projects/add', 'Projects::add');
$routes->get('projects/edit/(:num)', 'Projects::edit/$1');
$routes->post('projects/edit/(:num)', 'Projects::edit/$1');