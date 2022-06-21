<?php

namespace App\Controller;

use Core\Controller\Controller;

class HomeController extends AppController{

   public function __construct(){
        parent::__construct();

        $this->loadModel('Produit');
        $this->loadModel('Category');
        $this->loadModel('SousCategory');
    }

    public function index(){
        $categories = $this->Category->all();
        $this->render('home.index', compact('categories'));
    }


}