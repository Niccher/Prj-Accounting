<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->get('/', 'Home::home');

$routes->get('home', 'Home::home');

$routes->group('source', static function ($routes) {
    $routes->get('both', 'Sources::both_sources');
    $routes->get('both/writer', 'Sources::both_sources_writer');
    $routes->get('both/writer/(:num)', 'Sources::both_sources_writer/$1');
    $routes->get('fiverr', 'Sources::fiverr');
    $routes->get('dc', 'Sources::direct_client');
    $routes->get('timeline', 'Sources::work_timeline');
    $routes->get('timeline/(:num)', 'Sources::work_timeline/$1');
    $routes->get('timeline_both', 'Sources::both_sources_writer');
    $routes->get('add_entry', 'Sources::add_entry');
    $routes->post('insert_entry', 'Sources::insert_entry');
});

$routes->group('monthly', static function ($routes) {
    $routes->get('/', 'Monthly::index');
    $routes->post('filter', 'Monthly::filtered');
});

$routes->group('users', static function ($routes) {
    $routes->get('writer', 'Users::writer');
    $routes->get('writer/profile', 'Users::writer_profile');
});

$routes->group('activities', static function ($routes) {
    $routes->get('calendar', 'Activities::calendar');
    $routes->get('invoices', 'Activities::invoices');
});



service('auth')->routes($routes);

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
