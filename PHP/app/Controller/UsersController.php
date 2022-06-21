<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class UsersController extends AppController {
    
   

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Commande');

    }
    
    public function account(){
        $user = $this->User->find($_SESSION['user']->id);
        $orders = $this->Commande->all();

        if($_SESSION['user']->role === 'ROLE_USER'){
            $orders = $this->Commande->allByUser($_SESSION['user']->id);
        }

        $this->render('users.account', compact('orders','user'));
    }
    public function login(){
        $errors = false;
        if(!empty($_POST)){
            $auth = new DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'], $_POST['password'])){
                if($_SESSION['user']->role === 'ROLE_ADMIN'){
                    // champ user 'role' administrateur
                    header('Location: index.php?p=admin.posts.index');
                    // champ user 'user'
                }else{
                    header('Location: index.php');
                }
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);
        $this->render('users.login', compact('form', 'errors'));
    }

    /*
    * fonction de déconnexion de l'utilisateur
    */
    public function logout(){
  
        $this->render('users.logout');
    }


    /*
    * fonction d'inscription de l'utilisateur
    */
    public function inscription(){
        $errors = false;
        $messageError = null;

        if(!empty($_POST)){
            // Vérification des champs de manière générale
                list($errors,$messageError)  = $this->validate($_POST);

                if(!$errors){
                    $this->registration($_POST);
                }   
            }
        
        $form = new BootstrapForm($_POST);
        $this->render('users.inscription', compact('form', 'errors', 'messageError'));
    }
    /*
    * validation formulaire 
    */
        public function validate($donnees){
            $errors = false;
            $messageError = null;
            if(empty($donnees['firstname']) || 
               empty($donnees['lastname']) || 
               empty($donnees['email']) ||
               empty($donnees['emailVerif']) ||
               empty($donnees['tel']) ||
               empty($donnees['username']) ||
               empty($donnees['password']) ||
               empty($donnees['passwordVerif'])
               ){
                $errors = true;
                $messageError = "Veuillez remplir tous les champs";
            }else{

                if($donnees['email'] != $donnees['emailVerif']){
                    $errors = true;
                    $messageError = "Les champs d'email sont incorrect";
                }
                if($donnees['password'] != $donnees['passwordVerif']){
                    $errors = true;
                    $messageError = "Les champs de password sont incorrect";
                }

                if(strlen($donnees['tel']) < 10){
                    $errors = true;
                    $messageError = "Le champ de téléphone doit comporter 10 chiffres";
                }
                return [$errors , $messageError];
        }
    }

    /*
    * fonction d'enregistrement de l'utilisateur
    */
    public function registration($donnees){
        if (!empty($donnees)) {
        
            $result = $this->User->create([
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'role' => "ROLE_USER",
                'password' => sha1($_POST['password']),
            ]);
            if($result){
                header('Location: index.php?p=users.login');
            }
        }
    }
    /*
    * liste  utilisateur
    */
    public function listUsers(){
        $users = $this->User->all();
        $this->render('users.listUsers', compact('users'));
    }
    /*
    * editer  utilisateur
    */
    public function edit(){
          if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }
        $errors = false;
        $messageError = null;
        $user = $this->User->find($_GET['id']);

         if (!empty($_POST)) {
            list($errors,$messageError)  = $this->validate($_POST);
            $role = "ROLE_USER";
            if($_POST['isadmin']){
                $role = "ROLE_ADMIN";
            }
            if(!$errors){
            $result = $this->User->update($_GET['id'],[
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'role' => $role,
                'password' => sha1($_POST['password']),
            ]);
            
            if($result){
                return $this->listUsers();
            } 
        }
        }

        $form = new BootstrapForm($user);
        $this->render('users.add', compact( 'form', 'errors', 'messageError'));

    }
     public function add(){
        $errors = false;
        $messageError = null;

        if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }

        if (!empty($_POST)) {
            list($errors,$messageError)  = $this->validate($_POST);
            $role = "ROLE_USER";
            if($_POST['isadmin']){
                $role = "ROLE_ADMIN";
            }
            if(!$errors){
            $result = $this->User->create([
                'username' => $_POST['username'],
                'firstname' => $_POST['firstname'],
                'lastname' => $_POST['lastname'],
                'email' => $_POST['email'],
                'tel' => $_POST['tel'],
                'role' => $role,
                'password' => sha1($_POST['password']),
            ]);
            
            if($result){
                return $this->listUsers();
            } 
        }
        }

        $form = new BootstrapForm($_POST);
        $this->render('users.add', compact( 'form', 'errors', 'messageError'));
    }

    public  function delete()
    {
       if($_SESSION['user']->role != 'ROLE_ADMIN'){
            header('Location: index.php');
        }

        if (!empty($_POST)) {
            $result = $this->User->delete($_POST['id']);
            return $this->listUsers();
        }
    }
}