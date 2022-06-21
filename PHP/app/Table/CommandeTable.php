<?php
namespace App\Table;

use Core\Table\Table;

class CommandeTable extends Table{

    protected $table = 'commandes';

    /**
     * Récupère les derniers produits
     * @return array
     */
    public function last(){
        return $this->query("
            SELECT commandes.id, commandes.user_id, commandes.prix_total, produits.donnees
            FROM commandes");
    }

    /**
     * Récupère les dernieres commandes de la category demandée
     * @param $user_id int
     * @return array
     */
    public function lastByCategory($user_id){
        return $this->query("
            SELECT commandes.id, commandes.user_id, commandes.prix_total, produits.donnees
            FROM commandes
            LEFT JOIN users ON commandes.user_id = users.id
            WHERE commandes.user_id = ?
            ORDER BY commandes.id DESC", [$user_id]);
    }
/**
     * Récupère les derniers produits
     * @return array
     */
    public function lastByUser($userId){
        return $this->query("
            SELECT commandes.id, commandes.user_id, commandes.prix_total, commandes.donnees, commandes.produits
            FROM commandes where user_id=$userId  ORDER BY commandes.id DESC limit 0,1");
    }

    public function allByUser($userId){
        return $this->query("
            SELECT commandes.id, commandes.user_id, commandes.prix_total, commandes.donnees, commandes.produits ,commandes.date_commande
            FROM commandes where commandes.user_id=$userId  ORDER BY commandes.id DESC ");
    }
    
}