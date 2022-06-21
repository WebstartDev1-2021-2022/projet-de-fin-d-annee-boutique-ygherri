<?php

namespace App\Controller\Admin;

use Core\HTML\BootstrapForm;

class SousCategoriesController extends AppController{

    public function __construct(){
        parent::__construct();
        $this->loadModel('SousCategory');
    }

    public function index(){
        $items = $this->SousCategory->all();
        $this->render('admin.souscategories.index', compact('items'));
    }

    public function add(){
        if (!empty($_POST)) {
            $result = $this->SousCategory->create([
                'titre' => $_POST['titre'],
                'category_id' => $_POST['category_id']
            ]);
            return $this->index();
        }
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($_POST);
        $this->render('admin.souscategories.edit', compact('categories','form'));
    }

    public function edit(){
        if (!empty($_POST)) {
            $result = $this->SousCategory->update($_GET['id'], [
                'titre' => $_POST['titre'],
                'category_id' => $_POST['category_id']
            ]);
            return $this->index();
        }

        $souscategory = $this->SousCategory->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->extract('id', 'titre');
        $form = new BootstrapForm($souscategory);
        $this->render('admin.souscategories.edit', compact('categories', 'form'));
    }

    public function delete(){
        if (!empty($_POST)) {
            $result = $this->Category->delete($_POST['id']);
            return $this->index();
        }
    }

}