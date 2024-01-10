<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'homepage::index');

// route product with filter auth
$routes->group('', ['filter' => 'auth'] ,function ($routes) {
    $routes->get('/product', 'Product::index');
    $routes->get('/product/read', 'Product::read');
    $routes->post('/product/create', 'Product::create');
    $routes->post('/product/edit', 'Product::edit');
    $routes->post('/product/update', 'Product::update');
    $routes->post('/product/delete', 'Product::delete');
    $routes->post('/product/delete_batch', 'Product::delete_batch');
    
});
$routes->post('/update-user-level', 'Auth::updateUserLevel');
$routes->get('/pemula', 'Homepage::class1');
$routes->get('/menengah', 'Homepage::class2');
$routes->get('/ahli', 'Homepage::class3');

$routes->get('/dashadmin', 'Homepage::dashadmin');

// route auth with filter auth:page
$routes->group('', ['filter' => 'auth:page'] ,function ($routes) {
    $routes->get('/login', 'Auth::index_login');
    $routes->post('/login', 'Auth::login');
    $routes->get('/register', 'Auth::index_register');
    $routes->post('/register', 'Auth::register');

});

$routes->get('/logout', 'Auth::logout');