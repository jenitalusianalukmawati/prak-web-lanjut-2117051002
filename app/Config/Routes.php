<?php

use App\Controllers\UserController;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('profile', 'Home::profile');
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->get('/user', [UserController::class, 'index']);
$routes->post('/user/store', [UserController::class, 'store']);