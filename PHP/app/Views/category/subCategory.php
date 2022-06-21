  

            <div id="page-content">  
            <div class="container top-page-content">
                    <div class="row">
                       <?php include('sidebar.php'); ?>

                        <!--Main Content-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 main-col">
                            <div class="page-title"><h1><?= $sousCategory->titre?></h1></div>
                           
                           

                            <!--Product Grid-->
                            <div class="grid-products grid--view-items prd-grid">
                                <div class="row">
                                    <?php foreach ($produits as $produit){
                                        ?>
                                          <div class="col-6 col-sm-6 col-md-4 col-lg-4 item">
                                        <!--Start Product Image-->
                                        <div class="product-image">
                                            <!--Start Product Image-->
                                            <a href="?p=product.detail&id=<?= $produit->id; ?>" class="product-img">
                                                <!-- image -->
                                                <img class="primary blur-up lazyload"  src="img/upload/<?= $produit->img; ?>" alt="image" title="<?= $produit->titre?>">
                                                <!-- End image -->
                                               
                                            </a>
                                            <!--End Product Image-->

                                            

                                            <!--Product Button-->
                                            <div class="button-set style0 d-none d-md-block">
                                                <ul>
                                                    <!--Cart Button-->
                                                    <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i> <span class="tooltip-label top">Ajouter au panier</span></a></li>
                                                    <!--End Cart Button-->
                                                   
                                                    <!--Wishlist Button-->
                                                    <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Ajouter aux favoris</span></a></li>
                                                    <!--End Wishlist Button-->
                                                    
                                                </ul>
                                            </div>
                                            <!--End Product Button-->  
                                        </div>
                                        <!--End Product Image-->
                                        <!--Start Product Details-->
                                        <div class="product-details text-center">
                                            <!--Product Name-->
                                            <div class="product-name text-uppercase">
                                                <a href="?p=product.detail"><?= $produit->titre?></a>
                                            </div>
                                            <!--End Product Name-->
                                            <!--Product Price-->
                                            <div class="product-price">
                                                
                                                <span class="price"><?= $produit->prix?>€</span>
                                            </div>
                                            <!--End Product Price-->
                                          
                                            <!--Sort Description-->
                                            <p class="hidden sort-desc"><?= $produit->description?></p>
                                            <!--End Sort Description-->
                                           
                                            <!-- Product Button -->
                                            <div class="button-action d-flex">
                                                <div class="addtocart-btn">
                                                    <form class="addtocart" action="#" method="post">
                                                        <a class="btn pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon hidden an an-cart-l"></i>Ajouter au panier</a>
                                                    </form>
                                                </div>
                                                
                                                <div class="wishlist-btn">
                                                    <a class="btn btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i> <span class="tooltip-label top">Ajouter aux favoris</span></a>
                                                </div>
                                                
                                            </div>
                                            <!-- End Product Button -->
                                        </div>
                                        <!--End Product Details-->
                                    </div>
                                        <?php

                                    }
                                    ?>
                                  
                                </div>
                            </div>
                            <!--End Product Grid-->

                           
                            </div>
                            </div>
                            </div>
                            </div>
                          

                           

          