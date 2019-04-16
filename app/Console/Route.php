<?php
$routes = array(
    'index' => 'IndexController@index',
    'login' => 'LoginController@index',
    'login/login' => 'LoginController@login',
    'logout' => 'LoginController@logout',
    'home' => 'HomeController@index',
    'factura' => 'BillController@index',
    'customer/{$id}/delete' => 'HomeController@index',
    
);