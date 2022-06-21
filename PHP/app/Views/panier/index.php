<div id="page-content">
        <div class="container">
         <div class="margin-cart">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col box-shadow">
            <form action="index.php?p=panier.recapitulatif" method="POST">

                <table class="align-middle">
                  <thead class="cart__row cart__header small--hide">
                    <tr class="tr-panier">
                      <th colspan="2" class="text-start">Produits</th>
                      <th class="text-center">Prix</th>
                      <th class="text-center">Quantité</th>
                      <th class="text-center">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php if(!empty($panier)){ ?>
                    <?php foreach ($panier as $idProduit => $champs): 
                         

                      ?>
                      <input type="hidden" id="produit-id-<?=$idProduit?>" name="produit-id-<?=$idProduit?>"  class="form-control" value="<?= $idProduit?>">
                      <input type="hidden" id="produit-<?=$idProduit?>-total" name="produit-<?=$idProduit?>-total" class="form-control" value="<?= $champs['prix']* $champs['nbr']?>">
                      <?php  $product = App::getInstance()->getTable('Produit')->find( $champs['id']); ?>
                    <tr
                      class="cart__row border-bottom line1 cart-flex border-top"
                    >
                      
                      <td class="cart__image-wrapper cart-flex-item">
                        <a href="?p=product.detail&id=<?= $champs['id']?>"
                          ><img
                            class="cart__image blur-up lazyload"
                            data-src="img/upload/<?=  $product->img;?>"
                            src="img/upload/<?=  $product->img;?>"
                            alt="<?=  $product->titre;?>"
                            width="80"
                        /></a>
                      </td>
                      <td class="cart__meta small--text-left cart-flex-item">
                        <div class="list-view-item__title">
                          <a href="?p=product.detail&id=<?= $champs['id']?>"
                            ><?=$champs['titre']?></a>
                        </div>
                        <div class="cart__meta-text">
                         Qty: <?=$champs['nbr']?>
                        </div>
                        <div class="cart-price d-md-none">
                          <span class="money fw-500"><?=$champs['prix']?>€</span>
                        </div>
                      </td>
                      <td
                        class="cart__price-wrapper cart-flex-item text-center small--hide"
                      >
                        <span class="money"><?=$champs['prix']?>€</span>
                      </td>
                      <td
                        class="cart__update-wrapper cart-flex-item text-end text-md-center"
                      >
                      <input type="number" id="produit-<?=$idProduit?>-nbr" name="produit-<?=$idProduit?>-nbr" class="form-control produit-nbr" value="<?=$champs['nbr']?>"  data-produit="<?=$idProduit?>" data-prix="<?=$champs['prix']?>">

                        
                        <a
                          href="#"
                          title="Remove"
                          class="removeMb d-md-none d-inline-block text-decoration-underline mt-2 me-3"
                          >Remove</a
                        >
                      </td>
                     <td>
                     <input type="text" id="produit-<?=$idProduit?>-total-disabled" name="produit-<?=$idProduit?>-total-disabled" class="form-control produit-total" value="<?=$champs['prix']* $champs['nbr']?>€" disabled="disabled">

                    </td>
                    </tr>
                    <?php endforeach; ?>
                    <tr>
                      <td colspan="3"></td>
                      <td>Total de la commande</td>
                      <td 
                        class="cart-price cart-flex-item text-center small--hide"
                      >
                      <input type="text" id="commande-total-disabled" name="commande-total-disabled" class="form-control" value="<?=$prixTotalCommande?>€" disabled="disabled">

                      </td>
                    </tr>
                    <input type="hidden" id="commande-total" name="commande-total" class="form-control" value="<?=$prixTotalCommande?>">

                    <?php
  }else{ ?>
      <p>Panier vide</p>
<?php
  }   ?>
                    
                  </tbody>
                  <tfoot class="tfoot-padding">
                    <tr>
                      <td colspan="3" class="text-start pt-3">
                        <a
                          href="index.php"
                          class="btn btn--link d-inline-flex align-items-center btn--small p-0 cart-continue"
                          ><i class="me-1 icon an an-angle-left-l"></i
                          ><span class="cart-span"
                            >Continuer le shopping</span
                          ></a
                        >
                      </td>
                      <td colspan="3" class="text-end pt-3">
                      <a
                          href="index.php?p=panier.vider"
                          type="submit"
                          name="clear"
                          class="btn btn--link d-inline-flex align-items-center btn--small small--hide"
                        >
                          <i class="me-1 icon an an-times-r"></i
                          ><span class="ms-1 cart-span"
                            >Vider le panier</span
                          >
                      </a>
                        <button
                          type="submit"
                          name="update"
                          class="d-inline-flex align-items-center rounded cart-continue ml-2 order-btn"
                        >
                          <i class=""></i>
                          <span class="order-btn"
                            >Passer commande</span
                          >
                        </button>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </form>
            </div>
        </div>
        </div>
<script>

  var elements = document.getElementsByClassName('produit-nbr');
  var prixCommande = document.getElementById('commande-total');
  var prixCommandeDisabled = document.getElementById('commande-total-disabled');
  var prixTotalCommande = 0;
  if(elements){
    window.addEventListener('change', changePrix)
  }

  function changePrix(){
    prixTotalCommande = 0;
    for (var i = 0; i < elements.length; i++) {

      var valeur = elements[i].value;
      var produit = elements[i].dataset.produit;
      var prix = elements[i].dataset.prix;
     
      var prixUnite = document.getElementById('produit-'+produit+'-total');
      var prixUniteDisabled = document.getElementById('produit-'+produit+'-total-disabled');

      var resulatPrixtotal = prix*valeur;

      prixUniteDisabled.setAttribute('value', resulatPrixtotal+"€")
      prixUnite.setAttribute('value', resulatPrixtotal)

      prixTotalCommande = prixTotalCommande + resulatPrixtotal;

      prixCommandeDisabled.setAttribute('value', prixTotalCommande+"€")

      prixCommande.setAttribute('value', prixTotalCommande)

    }

  }

</script>