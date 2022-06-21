<?php
namespace App\Controller;

use Core\Controller\Controller;

class FooterController extends AppController{

 public function cgv(){
        $this->render('footer.cgv');
    }
     public function mentions(){
        $this->render('footer.mentions');
     }
     public function contact(){
        $this->render('footer.contact');
     }
}