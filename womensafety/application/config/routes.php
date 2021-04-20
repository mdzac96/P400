<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
$route['admin'] ='admin';
$route['home'] ='Welcome/index';
$route['about'] ='Welcome/about';
$route['services'] ='Welcome/services';
$route['history'] ='Welcome/history';
$route['signup'] ='Welcome/signup';
$route['login'] ='Welcome/login';
