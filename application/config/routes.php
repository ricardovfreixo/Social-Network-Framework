<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "welcome";
$route['scaffolding_trigger'] = "";


// BEGIN AUTHENTICATION LIBRARY ROUTES
$route['login'] = "admin/admin/login";
$route['logout'] = "admin/admin/logout";
$route['register'] = "admin/admin/register";
$route['admin/dashboard'] = "admin/admin/index";
// END AUTHENTICATION LIBRARY ROUTES

/* End of file routes.php */
/* Location: ./system/application/config/routes.php */
