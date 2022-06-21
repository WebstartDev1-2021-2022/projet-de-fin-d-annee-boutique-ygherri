<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;
use DateTime;

class PanierController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Post');
        $this->loadModel('Category');
        $this->loadModel('Produit');
        $this->loadModel('Commande');
    }

    /**
     * Page de rectification des produits 
     */
    public function index(){

        $panier =  (!empty($_SESSION['panier']['produit']))? $_SESSION['panier']['produit'] : null ;
        $prixTotalCommande = 0;

        if($panier){
            foreach($panier as $prix){
                $resultat = $prix["prix"] * $prix["nbr"];
                $prixTotalCommande += $resultat;
            }
        }
        $this->render('panier.index', compact('panier', 'prixTotalCommande'));
    }    
    /**
     * Ajout dans le panier
     */
    public function add(){

        $referer = $_SERVER['HTTP_REFERER']; 
        if($_POST['nbr'] > 0 ){
            $_SESSION['panier']['produit'][$_POST['idProduit']]['prix'] = $_POST['prix'];
            $_SESSION['panier']['produit'][$_POST['idProduit']]['nbr'] += $_POST['nbr'];
            $_SESSION['panier']['produit'][$_POST['idProduit']]['titre'] = $_POST['titre'];            
            $_SESSION['panier']['produit'][$_POST['idProduit']]['id'] = $_POST['idProduit'];            
        } 
        header('Location: '.$referer.'');
       
    }

    /**
     * Page de recapitulatif Liste du panier
     */
    public function recapitulatif(){

        $produits = $_REQUEST;
        $produitsAll = array();
         foreach($produits as $key => $produit){
            $produitSelect = '';
            if(!empty($produits['produit-id-'.$produit])){

                $produitSelect = $this->Produit->findWithCategory($produit);
                $produitsAll['produit'][$produitSelect->id]['produit-id'] = $produits['produit-id-'.$produit];
                $produitsAll['produit'][$produitSelect->id]['produit-nbr'] = $produits['produit-'.$produit.'-nbr'];
                $produitsAll['produit'][$produitSelect->id]['produit-total'] = $produits['produit-'.$produit.'-total'];
                $produitsAll['produit'][$produitSelect->id]['produit'] = $produitSelect;

            }   
            $produitsAll['commande']['commande-total']=  $produits['commande-total'];
         }

         if($produitsAll['commande']['commande-total']){
            $this->render('panier.recapitulatif', compact('produitsAll'));
         }
         else{
            header('Location: index.php?p=panier.index');

         }

    }

    /**
     * Page de confirmation ajout dans table commande et détruire le panier
     */
    public function confirmation(){


        if(!empty($_POST['user_id'])){

            $donnees = serialize($_POST);
            $produitIds = serialize($_POST["produit_id"]);
            $result = $this->Commande->create([
                'user_id' => $_POST['user_id'],
                'donnees' => $donnees,
                'produits' => $produitIds,
                'prix_total' => $_POST['commande-total'],
                'date_commande' => "".date('Y-m-d')."",

                
            ]);

            // Détruire session panier
            unset($_SESSION['panier']);
            $commande = $this->Commande->lastByUser($_POST['user_id']);
         
            $this->render('panier.confirmation', compact('commande'));
        }else{

            header('Location: index.php?p=users.login');
        }

    }

    public function vider(){
        if(isset($_SESSION['panier'])){
            unset($_SESSION['panier']);
        }
        header('Location: index.php');

    }

    public function detail(){

        $commandeId = $_GET['id'];
        $commande = $this->Commande->find($commandeId);
         
        $this->render('panier.detailCommande', compact('commande'));
        

    }
}