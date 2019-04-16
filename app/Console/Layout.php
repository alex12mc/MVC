<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Layout
 *
 * @author amartinez
 */
class Layout {
    function __construct($view, $data = null) {
        require 'Config.php';
        if(file_exists("./views/" . $view)) {
            if(file_exists("./views/Layout/" . $header))
                require "./views/Layout/" . $header;
            require "./views/" . $view;
            if(file_exists("./views/Layout/" . $footer))
                require "./views/Layout/" . $footer;
        } else {
            echo 'Sitio no encontrado.';
        }
    }
}
