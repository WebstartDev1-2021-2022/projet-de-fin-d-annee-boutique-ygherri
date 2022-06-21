<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class AccueilController extends AppController {

    public function __construct(){
        parent::__construct();

        $this->loadModel('Produit');
        $this->loadModel('Category');
        $this->loadModel('SousCategory');
    }

    public function index(){
        
        $produits = $this->Produit->last();
        $categories = $this->Category->all();
        $sousCategories = $this->SousCategory->all();


        $this->render('accueil.index', compact('produits', 'categories', 'sousCategories'));
    }




}