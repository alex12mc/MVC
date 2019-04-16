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
class Controller {
    public function loadModel($model) {
        require './models/' . $model . '.php';
    }
    public function view($view_name) {
        if(file_exists('resources/views/' . $view_name)) {
            require 'resources/views/' . $view_name;
        } else {
            echo "Sitio no encontrado.";
        }
    }
    public function redirectTo($route) {
        header('Location: ' . url_base() . $route . '/');
        exit;
    }
}