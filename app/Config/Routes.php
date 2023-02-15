<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/signin', 'Signin::index');
$routes->get('/hash/(:any)', 'Signin::hashPassword/$1');
$routes->post('/signin/auth', 'Signin::auth');
$routes->get('/logout', 'Signin::logout');
//admin
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/user', 'Users::index');
$routes->post('/user/getData', 'Users::getData');
$routes->get('/admin', 'Users::admin');
$routes->get('/user/delete/(:num)', 'Users::delete/$1');
$routes->get('/editUsers/(:num)', 'Users::edit/$1');


//user

//name
$routes->add('/name', 'Firstname::index');
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
// $routes->get('/editGuest', 'Guest::edit');

// attendance
$routes->get('/attend/(:num)/(:any)', 'Attendance::open/$1/$2');

//mempelai
$routes->add('/mempelai', 'Mempelai::index');
$routes->post('/mempelai/save', 'Mempelai::process');
$routes->post('/mempelai/upload', 'Mempelai::upload');

// pengaturan
$routes->add('/pengaturan', 'Pengaturan::index');
$routes->post('/pengaturan/save', 'Pengaturan::process');

// acara
$routes->add('/acara', 'Acara::index');
$routes->post('/acara/save', 'Acara::process');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
