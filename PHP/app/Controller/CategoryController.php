<?php
namespace App\Controller;

use Core\Controller\Controller;

class CategoryController extends AppController{
 public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
        $this->loadModel('Category');
        $this->loadModel('SousCategory');

    }
 public function index(){
        $idCategorie = $_GET["id"];
        $categorie = $this->Category->find($idCategorie);
        $produits = $this->Produit->lastByCategory($idCategorie);
        $this->render('category.index', compact('produits', 'categorie'));
    }
    public function subCategory(){
        $idSousCategorie = $_GET["id"];
        $sousCategory = $this->SousCategory->find($idSousCategorie);
        $produits = $this->Produit->lastBySubCategory($idSousCategorie);
        $this->render('category.subCategory', compact('produits', 'sousCategory'));
    }
}