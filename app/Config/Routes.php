<?php namespace Config;

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
$routes->setDefaultController('Users');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//$routes->get('/', 'Admin::index',['filter'=>'noauth']);
$routes->get('/view_users', 'Users::index');
$routes->match(['get','post'],'/edit_user', 'Users::edit_user');
$routes->match(['get','post'],'/create_user', 'Users::create_user');
$routes->get('/view_profile', 'Users::view_profile');
$routes->get('user_profile_view/(:segment)', 'Users::view_profile/$1');
// $routes->get('logout', 'Users::logout');
// $routes->match(['get','post'],'register', 'Users::register',['filter'=>'auth']);
// $routes->match(['get','post'],'register_student', 'Students::register_student',['filter'=>'noauth']);
// $routes->match(['get','post'],'course_view', 'Course::index',['filter'=>'noauth']);
// $routes->match(['get','post'],'verifycertificate', 'Certificate::verifycertificate',['filter'=>'noauth']);
// $routes->match(['get','post'],'profile', 'Users::profile',['filter'=>'auth']);
// $routes->match(['get','post'],'students', 'Students::index',['filter'=>'auth']);
// $routes->match(['get','post'],'createcourse', 'Course::createcourse',['filter'=>'auth']);
// $routes->match(['get','post'],'courses', 'Course::courses',['filter'=>'auth']);
// $routes->get('dashboard', 'Dashboard::index',['filter'=>'auth']);
// $routes->get('slug_view/(:segment)', 'Students::slug_view/$1',['filter'=>'auth']);
// $routes->get('(:any)', 'Students::slug_view/$1',['filter'=>'auth']);
// $routes->get('email', 'Students::send_mail');
/**
 * --------------------------------------------------------------------
 * Additional Routingsssss
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
