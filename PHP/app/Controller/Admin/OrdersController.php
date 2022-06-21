<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class OrdersController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Orders');
    }

     public function index(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }
        $orders = $this->Order->all();
            $this->render('admin.orders.index', compact('orders'));
        }
}