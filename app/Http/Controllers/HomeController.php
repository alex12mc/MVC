<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Index
 *
 * @author amartinez
 */
class HomeController extends Controller {
    public function index() {
        session_start();
        if (isset( $_SESSION['user_id'] ) ) {
            $this -> view('home.php', null);
        } else {
            $this -> redirectTo('index');
        }
        
    }
}
