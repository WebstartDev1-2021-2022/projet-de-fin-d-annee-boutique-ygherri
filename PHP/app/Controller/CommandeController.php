<?php

namespace App\Controller;

use Core\Auth\DBAuth;
use Core\HTML\BootstrapForm;
use \App;

class CommandeController extends AppController {

    public function __construct(){
        parent::__construct();
        $this->loadModel('User');
        $this->loadModel('Commande');
    }

    function index(){
        $orders = $this->Commande->all();

        if($_SESSION['user']->role != 'ROLE_USER'){
            $orders = $this->Commande->allByUser($_SESSION['user']->id);
        }
            $this->render('commande.index', compact('orders'));
        }
    }

    

