<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('test', static function () {
    return view('layouts/template');
});
$routes->get('welcom', 'Home::welcome');
$routes->get('signin', 'Signin::index');
$routes->get('/hash/(:any)', 'Signin::hashPassword/$1');
$routes->post('auth', 'Signin::auth');
$routes->get('/logout', 'Signin::logout');
//admin
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/user', 'Users::index');
$routes->post('/user/getData', 'Users::getData');
$routes->get('/admin', 'Users::admin');
$routes->get('/user/delete/(:num)', 'Users::delete/$1');
$routes->get('/editUsers/(:num)', 'Users::edit/$1');
$routes->post('user/process', 'Users::process');


//user

//name
$routes->get('/name', 'Firstname::index');
$routes->get('/name/getData', 'Firstname::getData');
$routes->get('/name/add', 'Firstname::add');
$routes->post('/name/save', 'Firstname::process');
$routes->get('/name/delete/(:any)', 'Firstname::delete/$1');
$routes->get('/name/edit/(:any)', 'Firstname::edit/$1');

//guest
$routes->add('/guest', 'Guest::index');
$routes->get('/guest/getData', 'Guest::getData');
$routes->post('/guest/save', 'Guest::process');
$routes->get('/guest/add', 'Guest::add');
$routes->get('/guest/delete/(:any)', 'Guest::delete/$1');
$routes->get('/editGuest/(:any)', 'Guest::edit/$1');
$routes->get('/getText/(:any)', 'Guest::text/$1');
// $routes->get('/editGuest', 'Guest::edit');

// Ucapan
$routes->get('ucapan', 'Ucapan::index');
$routes->get('ucapan/getData', 'Ucapan::getData');
$routes->post('/add_komentar', 'Ucapan::add_komen');

// attendance
$routes->get('/attend/(:num)/(:any)', 'Attendance::open/$1/$2');

//mempelai
$routes->add('/mempelai', 'Mempelai::index');
$routes->post('/mempelai/save', 'Mempelai::process');
$routes->post('/mempelai/upload', 'Mempelai::upload');
$routes->get('image/serveImage/(:any)', 'Mempelai::serveImage/$1');

// pengaturan
$routes->add('pengaturan', 'Pengaturan::index');
$routes->post('pengaturan/save', 'Pengaturan::process');

// acara
$routes->add('/acara', 'Acara::index');
$routes->post('/acara/save', 'Acara::process');
