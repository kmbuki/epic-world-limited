<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| 
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;


// Shop
$route['shop'] = 'home/shop';
