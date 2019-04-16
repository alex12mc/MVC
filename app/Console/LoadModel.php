<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadModel
 *
 * @author amartinez
 */
class LoadModel {
    function __construct($model) {
        require './models/' . $model . '.php';
    }
}
