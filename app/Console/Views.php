<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Views
 *
 * @author amartinez
 */
class Views {
    public function __construct($view_name, $data = null) {
        if(file_exists('resources/views/' . $view_name)) {
            require 'resources/views/' . $view_name;
        } else {
            echo "Sitio no encontrado.";
        }
    }
}
