<?php
namespace App\Table;

use Core\Table\Table;

class OrdersTable extends Table{

    protected $table = "orders";

    public function all(){
        return $this->query("
            SELECT categories.id, categories.titre
            FROM categories");
    }
}