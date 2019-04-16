<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author amartinez
 */
class Model {
    public $db = null;
    function __construct() {
        try {
            $this -> db = $this -> getConnection();
        } catch (PDOException $exc) {
            echo "No se puede conectar a la Base de Datos" . $exc -> getMessage();
        }
    }
    public function getConnection() {
        $host = '127.0.0.1:3310';
        $user = 'root';
        $password = 'rootpassword';
        $database = 'mvc';
        $charset = 'utf8';
        $opt = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
        $pdo = new pdo("mysql:host={$host};dbname={$database};charset={$charset}", $user, $password, $opt);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}
