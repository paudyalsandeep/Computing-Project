<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['cart']='Cart/index';
$route['logout']='Logout/index';
$route['items']='admin/get_item';
$route['roles']='admin/get_role';
$route['admin/college']='admin/get_college';
$route['admin']='admin/get_users';
$route['profile']='profile/index';
$route['menu/payment']='payment/index';
$route['menu']='canteen/index';
$route['registration']='registration/index';
$route['login']='Login/index';

$route['posts']='posts/index';
$route['default_controller'] = 'pages/view';
$route['(:any)']='pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
