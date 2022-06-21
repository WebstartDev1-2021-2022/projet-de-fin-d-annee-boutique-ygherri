<div id="page-content">  
            <div class="container top-page-content">
<h1>Récapitulatif de la commande</h1>
<div class="container">
    <div class="row">

    <p><a href="index.php?p=panier.index"> Modifier la commande</a></p>

  </div>
</div>
<table class="align-middle">
                  <thead class="cart__row cart__header small--hide">
                    <tr class="tr-panier">
                      <th class="text-center th-padding"></th>
                      <th colspan="2" class="text-start">Produits</th>
                      <th class="text-center">Prix</th>
                      <th class="text-center">Quantité</th>
                      <th class="text-center">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
foreach($produitsAll['produit'] as $produit){

  ?>
  <tr>
    <td> <img width="50px" src="../public/img/upload/<?= $produit['produit']->img; ?>"></td>
    <td  colspan="2"><?=$produit['produit']->titre ?></td>
    <td class="text-center"> <?=$produit['produit']->prix ?>€</td>
    <td class="text-center"><?=$produit['produit-nbr'] ?></td>
    <td class="text-center"> <?=$produit['produit-total'] ?>€</td>
  </tr>
  <?php
}
  ?>
</tbody>
</table>
  
<?php

foreach($produitsAll['commande'] as $commande){ 
  ?>
    <div class="col-12">
      <p>Total de la commande : <?=$commande?>€</p>
    </div>
<?php
}
?>
<form action="index.php?p=panier.confirmation" method="POST">

<?php 

foreach($produitsAll['produit'] as $id => $produit){
    ?>
    <input type="hidden" name="produit_id[]"  value="<?=$id."-". $produit['produit-nbr'];?>">
    <input type="hidden" name="produit-id-<?=$id;?>" id="produit-id-<?=$id;?>" value="<?=$id;?>">
    <input type="hidden" name="produit-titre-<?=$id;?>" id="produit-titre-<?=$id;?>" value="<?=$produit['produit']->titre;?>" >
    <input type="hidden" name="produit-nbr-<?=$id;?>" id="produit-nbr-<?=$id;?>" value="<?=$produit['produit-nbr']?>" >
    <input type="hidden" name="produit-total-<?=$id;?>" id="produit-total-<?=$id;?>" value="<?=$produit['produit-total']?>" >

<?php }

?>

<?php foreach($produitsAll['commande'] as $commande){ ?>
  <input type="hidden" name="commande-total" id="commande-total" value="<?=$commande;?>" >
<?php }?>

<?php 
  if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])){
?>
  <input type="hidden" name="user_id" id="user_id" value="<?=$_SESSION['user']->id?>" >
<?php
  }  
?>

  <div class="container margin-auto">
        <div class="row center-pay">
          
            <div class="col-12 mt-4">
                <div class="p-3">
                    <p class="mb-0 fw-bold h4">Méthodes de paiement</p>
                </div>
            </div>
              <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold" for="">**** **** **** 1060</label>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box">
                        <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                            alt="">
                    </div>
                    <div class="number">
                        <label class="fw-bold">**** **** **** 1060</label>
                    </div>
                   
                </div>
            </div>
           
            </div>
            <div class="col-12 background-color">
                <div class="p-3">
                    <div class="card-body p-0">
                       
                        <div class="collapse p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-8">
                                    <p class="h4 mb-0">Résumé</p>
                                    
                                    <?php foreach($produitsAll['commande'] as $commande){ ?>
                                      <p class="mb-0"><span class="fw-bold">Prix:</span><span
                                            class="c-green">:<?=$commande;?>€</span></p>

                                    <?php }?>
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                        nihil neque
                                        quisquam aut
                                        repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                        quis,
                                        iste harum ipsum hic, nemo qui!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <p>
                            <a class="p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                aria-controls="collapseExample">
                               
                                <span class="">
                                    <span class="fab fa-cc-amex"></span>
                                    <span class="fab fa-cc-mastercard"></span>
                                    <span class="fab fa-cc-discover"></span>
                                </span>
                            </a>
                        </p>
                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0  mb-3">
                                    <p class="h4 mb-0">Paiement</p>
                                    <?php foreach($produitsAll['commande'] as $commande){ ?>

                                    <p class="mb-0">
                                        <span class="fw-bold">Montant à payer : </span>
                                        <span class="c-green"><?=$commande;?>€</span>
                                    </p>

                                    <?php }?>
                                    
                                   
                                </div>
                                <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">Numéro de carte</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">Mois/Année</label>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form__div">
                                                    <input type="password" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">CVV</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form__div">
                                                    <input type="text" class="form-control" placeholder=" ">
                                                    <label for="" class="form__label">Nom sur la carte</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                            <button
                          type="submit"
                         
                          class="submit"
                        >
                          <i class=""></i>
                          <span class="btn-payer"
                            >Payer</span
                          >
                        </button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
</form>
                                    </div>
                                    </div>