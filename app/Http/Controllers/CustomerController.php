<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author amartinez
 */
class CustomerController {
    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $Loader = new LoadModel('CustomerModel');
        $CustomerModel = new CustomerModel();
        $Customer = $CustomerModel -> getCustomers();
        $viewCustomer = new Layout('customer.php', compact("Customer"));
    }
}
