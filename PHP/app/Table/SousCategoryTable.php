<?php
namespace App\Table;

use Core\Table\Table;
use \PDO;

class SousCategoryTable extends Table{

    protected $table = "sous_categories";
    public function subCategoryById($id){
  return $this->query("
            SELECT sous_categories.id, sous_categories.titre
            FROM sous_categories where sous_categories.category_id = $id");
    }

}