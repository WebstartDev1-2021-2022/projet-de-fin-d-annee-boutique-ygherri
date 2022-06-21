<?php
namespace App\Controller;

use Core\Controller\Controller;

class CheckoutController extends AppController{

 public function cart(){
        $this->render('checkout.cart');
    }
     public function order(){
        $this->render('checkout.order');
    }
    public function confirmation(){
        $this->render('checkout.confirmation');
    }
}