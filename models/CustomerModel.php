<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CustomerModel
 *
 * @author amartinez
 */
class CustomerModel extends Model {
    public function getCustomers() {
        $result = $this -> db -> query("SELECT * FROM ad_cliente");
        return $result -> fetchAll();
    }
}
