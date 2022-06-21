<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class ProduitsController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Produit');
    }

    public function index(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }

        $produits = $this->Produit->all();
        $this->render('admin.produits.index', compact('produits'));
    }

    public function add(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }

        if (!empty($_POST)) {
            //Enregistrement de l'image
            $image = $this->uploadImage();

            $result = $this->Produit->create([
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'date' => date('Ymd'),
                'img' => ($image)? $image : null, 
                'prix' => $_POST['prix'],
                'category_id' => $_POST['category_id'],
                'sous_category_id' => $_POST['sous_category_id']
            ]);
            if($result){
                return $this->index();
            }
        }

        $this->loadModel('Category');
        $this->loadModel('SousCategory');
        $initCategorie = array(""=>"");
        $categories = $this->Category->extract('id', 'titre');
        $sousCategories = $this->SousCategory->extract('id', 'titre');

        // $categories = array_merge($initCategorie,$categories);
        // $sousCategories = array();
        // if(isset($_GET['category_id']) && !empty($_GET['category_id'])){
        //     $sousCategorie = $this->SousCategory->subCategoryById($_GET['category_id']);

        //     foreach($sousCategorie as $v){
        //         $sousCategories[$v->id] = $v->titre;
        //     }
       
        // }
        $form = new BootstrapForm($_POST);
        $this->render('admin.produits.edit', compact('categories', 'sousCategories', 'form'));
    }

    public function edit(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }

        $produit = $this->Produit->find($_GET['id']);

        if (!empty($_POST)) {
            //Enregistrement de l'image
            $image = $this->uploadImage();

            $result = $this->Produit->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'description' => $_POST['description'],
                'img' => ($image)? $image : $produit->img,
                'prix' => $_POST['prix'],
                'category_id' => $_POST['category_id'],
                'sous_category_id' => $_POST['sous_category_id']
            ]);
                
            if($result){
                return $this->index();
            }
        }
        
        $this->loadModel('Category');
        $this->loadModel('SousCategory');

        $categories = $this->Category->extract('id', 'titre');
        $sousCategories = $this->SousCategory->extract('id', 'titre');

        $form = new BootstrapForm($produit);
        $this->render('admin.produits.edit', compact('categories', 'sousCategories', 'form'));
    }

    public function delete(){
        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }

        if (!empty($_POST)) {
            $result = $this->Produit->delete($_POST['id']);
            return $this->index();
        }
    }

    /*
    * Fonction d'enregistrement d'image 
    */
    public function uploadImage(){
        //Vérifier si le formulaire a été soumis
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            // Vérifie si le fichier a été uploadé sans erreur.
            if(isset($_FILES["img"]) && $_FILES["img"]["error"] == 0){

                $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
                $filename = $_FILES["img"]["name"];
                $filetype = $_FILES["img"]["type"];
                $filesize = $_FILES["img"]["size"];
                
                // Vérifie l'extension du fichier
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

                // Vérifie la taille du fichier - 2Mo maximum
                $maxsize = 2 * 1024 * 1024;
                if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée 2Mo.");

                // Vérifie le type MIME du fichier
                if(in_array($filetype, $allowed)){
                    $image = explode('.',$_FILES["img"]["name"]);
                    $extension = $image[1];
                    $uploadedImage = uniqid().".".$extension;
                    move_uploaded_file($_FILES["img"]["tmp_name"], "../public/img/upload/" . $uploadedImage);
                    //echo "Votre fichier a été téléchargé avec succès.";
                    return $uploadedImage;
                } else{
                    echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
                    return false;
                }
            } else{
                //echo "Error: " . $_FILES["img"]["error"];
                return false;
            }
        }
    }

}