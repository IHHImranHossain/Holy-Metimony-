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
$routes->setDefaultController('LoginController');
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
// $routes->get('/', 'Home::index');





// Start LoginController Register Fucntion Route
$routes->get('/', 'LoginController::index');

$routes->get('user_login', 'LoginController::user_login');
$routes->post('login', 'LoginController::login');

$routes->get('registration', 'LoginController::registration');
$routes->post('registration_validation', 'LoginController::registration_validation');

$routes->get('firstregistration', 'LoginController::firstregistration');
$routes->post('first_registration_Validation', 'LoginController::first_registration_Validation');

$routes->get('secondregistration', 'LoginController::secondregistration');
$routes->post('second_registration_Validation', 'LoginController::second_registration_Validation');

$routes->get('thirdregistration', 'LoginController::thirdregistration');
$routes->post('third_registration_Validation', 'LoginController::third_registration_Validation');

$routes->get('fourthregistration', 'LoginController::fourthregistration');
$routes->post('fourth_registration_Validation', 'LoginController::fourth_registration_Validation');

$routes->get('fivethregistration', 'LoginController::fivethregistration');
$routes->post('fiveth_registration_Validation', 'LoginController::fiveth_registration_Validation');

// End LoginController Register Fucntion Route

// End LoginController Route



// Start AdminControlle Route
$routes->get('dashboard', 'AdminController::dashboard');
$routes->get('admin', 'AdminController::index');
$routes->post('adminlogin', 'AdminController::adminlogin');

$routes->get('profilecreatedby', 'AdminController::profilecreatedby');
$routes->post('profilecreatedbyinsert', 'AdminController::profilecreatedbyinsert');
$routes->get('profilecreateddelete', 'AdminController::profilecreateddelete');

$routes->get('addattributes', 'AdminController::addattributes');
$routes->post('addattributeinsert', 'AdminController::addattributeinsert');

$routes->get('additems', 'AdminController::additems');
$routes->post('iteminsert', 'AdminController::iteminsert');

$routes->get('logout', 'AdminController::logout');
// End AdminControlle Route


// Start UserController Route
$routes->get('user_home', 'UserController::index'); 

$routes->get('profile', 'UserController::profile');

$routes->get('edit_user_information', 'UserController::edit_user_information');
$routes->post('edit_registration_validation', 'UserController::edit_registration_validation');

$routes->get('update_personal_information', 'UserController::update_personal_information');
$routes->post('update_personal_information_validation', 'UserController::update_personal_information_validation');
$routes->post('update_second_personal_information_form', 'UserController::update_second_personal_information_form');
$routes->post('update_third_personal_information_form', 'UserController::update_third_personal_information_form');

$routes->get('your_interest_form', 'UserController::your_interest_form');
$routes->post('update_your_interest_form', 'UserController::update_your_interest_form');

$routes->get('partner_preference_form', 'UserController::partner_preference_form');
$routes->post('update_partner_preference_form', 'UserController::update_partner_preference_form');

$routes->get('user_password', 'UserController::user_password');
$routes->post('update_user_password', 'UserController::update_user_password');

$routes->get('user_image', 'UserController::user_image');
$routes->post('update_user_image', 'UserController::update_user_image');

$routes->get('your_cv', 'UserController::your_cv'); 

$routes->get('user_profile_view/(:num)', 'UserController::user_profile_view/$1'); 

$routes->post('sent_mail', 'UserController::sent_mail');
// $routes->get('user_profile_view', 'UserController::user_profile_view'); 

$routes->get('logout', 'UserController::logout');

// End UserController Route

// Start SearchController
$routes->get('quick_search', 'SearchController::quick_search'); 
$routes->post('quick_search_fetch', 'SearchController::quick_search_fetch'); 

$routes->get('profession_search', 'SearchController::profession_search'); 
$routes->post('profession_search_fetch', 'SearchController::profession_search_fetch'); 

$routes->get('marital_status_search', 'SearchController::marital_status_search'); 
$routes->post('marital_status_search_fetch', 'SearchController::marital_status_search_fetch'); 

$routes->get('education_search', 'SearchController::education_search'); 
$routes->post('education_search_fetch', 'SearchController::education_search_fetch');

$routes->get('smart_search', 'SearchController::smart_search'); 
$routes->post('smart_search_fetch', 'SearchController::smart_search_fetch');

$routes->get('advance_search', 'SearchController::advance_search'); 
$routes->post('advance_search_fetch', 'SearchController::advance_search_fetch');

$routes->get('major_active_search', 'SearchController::major_active_search'); 
$routes->post('major_active_search_fetch', 'SearchController::major_active_search_fetch');

$routes->get('community_search', 'SearchController::community_search'); 
$routes->post('community_search_fetch', 'SearchController::community_search_fetch');

$routes->get('district_search', 'SearchController::district_search'); 
$routes->post('district_search_fetch', 'SearchController::district_search_fetch');

$routes->get('view_all_search', 'SearchController::view_all_search'); 
// End SearchController

/**
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
