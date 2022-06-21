<?php
namespace App\Controller;

use Core\Controller\Controller;

class WishlistController extends AppController{

 public function index(){
        $this->render('wishlist.index');
    }
}