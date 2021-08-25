<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

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


//user

//name
$routes->add('/name', 'Firstname::index');
$routes->get('/name/getData', 'Firstname::getData');
$routes->get('/name/add', 'Firstname::add');
$routes->post('/name/save', 'Firstname::process');
$routes->get('/name/delete(:num)', 'Firstname::delete/$1');
// $routes->get('/name/edit(:num)', 'Firstname::edit/$1');

//guest
$routes->add('/guest', 'Guest::index');
$routes->get('/guest/getData', 'Guest::getData');
$routes->post('/guest/save', 'Guest::process');
$routes->get('/guest/add', 'Guest::add');
$routes->get('/guest/delete(:num)', 'Guest::delete/$1');
// $routes->get('/guest/edit(:num)', 'Guest::edit/$1');

//mempelai
$routes->add('/mempelai', 'Mempelai::index');
$routes->post('/mempelai/save', 'Mempelai::process');
// $routes->post('/mempelai/upload', 'Mempelai::upload');

// pengaturan
$routes->add('/pengaturan', 'Pengaturan::index');


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
