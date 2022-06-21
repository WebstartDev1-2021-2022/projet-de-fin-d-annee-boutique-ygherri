<?php
namespace App\Controller;

use Core\Controller\Controller;

class ProductController extends AppController{

    public function __construct(){
        parent::__construct();

        $this->loadModel('Produit');
    }
 public function detail(){
        $idProduit = $_GET["id"];
        $produit = $this->Produit->find($idProduit);
        $produitAimer = $this->Produit->likedProduct($idProduit);
        $memeCollection = $this->Produit->lastBySubCategory($produit->sous_category_id );
        $this->render('product.detail', compact('produit','produitAimer','memeCollection'));
    }
}