<?php


$route['default_controller'] = 'home';
$route['detail'] = 'detail';
$route['product'] = 'product';
$route['about'] = 'about';
$route['contact'] = 'contact';


$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route['library'] = 'library';
$route['pages'] = 'pages';
$route['template'] = 'template';
$route['(:any)'] = 'pages/view/$1';


