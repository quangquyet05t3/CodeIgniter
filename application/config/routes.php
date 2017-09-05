<?php


$route['default_controller'] = 'welcome';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['pages'] = 'pages';
$route['(:any)'] = 'pages/view/$1';

