<div id="page-content">  
            <div class="container top-page-content">
                <?php 
                $produits = unserialize($commande->produits);
                $donnee = unserialize($commande->donnees);
                $totalCommande = $donnee['commande-total'];
                $user = App::getInstance()->getTable('User')->find($commande->user_id);
                ?>
<h3>Détail commande N° <?= $commande->id;?></h3>
<h5>Client : <?= $user->firstname . " ". $user->lastname;?></h5>
<table>
<tr>
<td></td>
<td>Nom</td>
<td>QTE</td>
<td>Prix</td>
</tr>

<?php 



foreach($produits as $key => $produit){
    $extract = explode('-',$produit);
    $idProduit = $extract[0];
    $nbr = $extract[1];
    $product = App::getInstance()->getTable('Produit')->find($idProduit);
?>
<tr>
<td><img width="50px"  src="img/upload/<?= $product->img; ?>"  alt="<?= $product->titre; ?>" /></td>
<td><?= $product->titre;?></td>
<td><?= $nbr;?></td>
<td><?= $product->prix;?>€</td>
</tr>



    <?php
}
?>
<tr>
    <th colspan="4">Total: <?= $totalCommande?>€</th>
</tr>
</table>
            </div></div>