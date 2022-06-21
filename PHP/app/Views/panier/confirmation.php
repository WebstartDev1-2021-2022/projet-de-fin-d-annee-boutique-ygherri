<div id="page-content">  
            <div class="container top-page-content">
<h2 class="confirm-title">Commande confirmée !</h2>
<h3 class="detail-title">Détail commande</h3>
<table>
<tr class="border-bottom">
<td></td>
<td>Nom</td>
<td>QTE</td>
<td>Prix</td>
</tr>

<?php 
$produits = unserialize($commande[0]->produits);
$donnee = unserialize($commande[0]->donnees);
$totalCommande = $donnee['commande-total'];
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
<td><?= $product->prix;?></td>
</tr>



    <?php
}
?>
<tr>
    <th colspan="4">Total: <?= $totalCommande?></th>
</tr>
</table>
            </div></div>