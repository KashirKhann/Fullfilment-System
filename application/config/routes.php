<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/****Admin Routes START****/
$route['administrator'] = 'login_controller/login';
$route['administrator/check_login'] = 'login_controller/validate_login';
$route['administrator/dashboard'] = 'admin_controller/dashboard';
$route['administrator/logout'] = 'admin_controller/logout';
$route['administrator/new-password'] = 'login_controller/new_password';

/*users Start*/
$route['administrator/users'] = 'admin_controller/users';
$route[	'administrator/view_customer_user/(:num)'] = 'admin_controller/view_customer_user/$1';
$route['administrator/add_user'] = 'admin_controller/add_user';
$route['administrator/insert-customer-user'] = 'admin_controller/insert_customer_user';
$route['administrator/edit_customer_user/(:num)'] = 'admin_controller/edit_customer_user/$1';
$route['administrator/update_customer_user'] = 'admin_controller/update_customer_user';
$route['administrator/delete_customer_user/(:num)'] = 'admin_controller/delete_customer_user/$1';
/*users Ends*/

/*settings Start*/
$route['administrator/settings'] = 'admin_controller/settings';
$route['administrator/mail'] = 'admin_controller/mail';
$route['administrator/update-user'] = 'admin_controller/update_user';
$route['administrator/change-password'] = 'admin_controller/change_password';
/*settings Ends*/

/****Admin Routes END****/


$route['default_controller'] = 'login_controller/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
