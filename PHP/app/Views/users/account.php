
<div id="page-content top-page-content">
<div class="container container-infos">
    <div class="infos-compte">
        <h2>Informations</h2>
<div class="details-compte">
    
    <p><span>Nom :</span> <?= $user->firstname;?> </p>
    <p><span>Prénom : </span><?= $user->lastname;?></p>
    <p><span>Adresse mail : </span><?= $user->email;?></p>
    <p><span>n° tél : </span><?= $user->tel;?></p>
</div>
    </div>
    

</div>
<div class="commandes">
    <h2>Mes commandes</h2>
 <table>
                                     <tr>
    <th>N° de commande</th>
    <th>Date</th>
    <th>Total</th>
  </tr>
  <?php foreach ($orders as $order) { ?>
  <tr>
    <td><a href="index.php?p=panier.detail&id=<?= $order->id?>" style="color:darkgoldenrod !important"><?= $order->id?></a></td>
    <td><?= $order->date_commande?></td>
    <td><?= $order->prix_total?>€</td>
  </tr>
  <?php } ?>
</table>
  <!-- Grid Product -->
                    

    
                  

                  
</div>
</div>
</div>
                            
</div>
