<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author amartinez
 */
class Kernel {
    protected $default_controller = "IndexController";
    protected $default_method = "index";
    public function __construct() {
        $route = $this -> getRoutes();
        require 'Route.php';
        if(!empty($route)) {
            if(array_key_exists($route, $routes)) {
                $arrayController = explode('@', $routes[$route]);
                $this -> default_controller = $arrayController[0];
                $this -> default_method = $arrayController[1];
            }
        }
        if(file_exists('../app/Http/Controllers/' . $this -> default_controller . '.php')) {
            require '../app/Http/Controllers/' . $this -> default_controller . '.php';
            $this -> default_controller = new $this -> default_controller;
            if(method_exists($this -> default_controller, $this -> default_method)) {
                call_user_func([$this -> default_controller, $this -> default_method], null);
            } else {
                die("Metodo no encontrado.");
            }
        } else {
            die("Controlador no encontrado.");
        }
    }
    public function getRoutes() {        
        if(isset($_GET['route'])){
            $route = rtrim($_GET['route'],'/');
            $route = filter_var($route, FILTER_SANITIZE_URL);
            return $route;
        }
    }
}
