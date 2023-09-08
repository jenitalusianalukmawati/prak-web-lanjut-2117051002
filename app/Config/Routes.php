<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// jika mengakses /profile arahkan fungsi yg ada pada controller home
// $routes->get('/profile/(:any)/(:any)/(:any)' , 'Home::profile/$1/$2/$3');

// //perlu import
$routes->get(from: '/profile/(:any)/(:any)/(:any)', to: [Home::class, 'profile']);