<?php
namespace App\Table;

use Core\Table\Table;

class ProduitTable extends Table{

    protected $table = 'produits';

    /**
     * Récupère les derniers produits
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT produits.id, produits.titre, produits.img, produits.prix,  produits.description, categories.titre as categorie, sous_categories.titre as souscategorie
            FROM produits
            LEFT JOIN categories ON category_id = categories.id
            LEFT JOIN sous_categories ON sous_category_id = sous_categories.id
            ORDER BY produits.date DESC LIMIT 3");
    }

    /**
     * Récupère les derniers produits de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastByCategory($category_id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.img, produits.prix, produits.date, categories.titre as categorie
            FROM produits
            LEFT JOIN categories ON category_id = categories.id
            LEFT JOIN sous_categories ON sous_category_id = sous_categories.id
            WHERE produits.category_id = ?
            ORDER BY produits.date DESC", [$category_id]);
    }
     /**
     * Récupère les derniers produits de la category demandée
     * @param $category_id int
     * @return array
     */
    public function lastBySubCategory($category_id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.img, produits.prix, produits.date, categories.titre as categorie
            FROM produits
            LEFT JOIN categories ON category_id = categories.id
            LEFT JOIN sous_categories ON sous_category_id = sous_categories.id
            WHERE produits.sous_category_id = ?
            ORDER BY produits.date DESC", [$category_id]);
    }

    /**
     * Récupère un produit en liant la catégorie associée
     * @param $id int
     * @return \App\Entity\ProduitEntity
     */
    public function findWithCategory($id){
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.img, produits.prix    
            FROM produits
            WHERE produits.id = ?", [$id], true);
    }

  
    public function likedProduct($id)
    {
        return $this->query("
            SELECT produits.id, produits.titre, produits.description, produits.date, produits.img, produits.prix    
            FROM produits
            WHERE produits.id != ? limit 0 , 4", [$id]);
    }
}