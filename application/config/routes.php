<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/****Admin Routes START****/
$route['administrator'] = 'Login_controller/login';
$route['administrator/check_login'] = 'Login_controller/validate_login';
$route['administrator/dashboard'] = 'Admin_controller/dashboard';
$route['administrator/logout'] = 'Admin_controller/logout';
$route['administrator/new-password'] = 'Login_controller/new_password';

/*users Start*/
$route['administrator/users'] = 'Admin_controller/users';
$route[	'administrator/view_customer_user/(:num)'] = 'Admin_controller/view_customer_user/$1';
$route['administrator/add_user'] = 'Admin_controller/add_user';
$route['administrator/insert-customer-user'] = 'Admin_controller/insert_customer_user';
$route['administrator/edit_customer_user/(:num)'] = 'Admin_controller/edit_customer_user/$1';
$route['administrator/update_customer_user'] = 'Admin_controller/update_customer_user';
$route['administrator/delete_customer_user/(:num)'] = 'Admin_controller/delete_customer_user/$1';
/*users Ends*/

// Logs History Start
$route['administrator/log-user'] = 'Admin_controller/log_user';
$route['administrator/log-session'] = 'Admin_controller/log_session';
// Logs History End

/*settings Start*/
$route['administrator/settings'] = 'Admin_controller/settings';
$route['administrator/mail'] = 'Admin_controller/mail';
$route['administrator/update-user'] = 'Admin_controller/update_user';
$route['administrator/change-password'] = 'Admin_controller/change_password';
/*settings Ends*/

/****Admin Routes END****/


$route['default_controller'] = 'Login_controller/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
