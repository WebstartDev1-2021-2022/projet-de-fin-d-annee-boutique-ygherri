 <div id="page-content top-page-content">
                <!--Main Content-->
                <div class="container padding-container">
                    <!--Product Content-->
                    <div class="product-single">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                                <div class="product-details-img thumb-left clearfix d-flex-wrap mb-3 mb-md-0">
                                    
                                   <div class="">
                                        <div><img  src="img/upload/<?= $produit->img; ?>"  alt="<?= $produit->titre; ?>" /></div>
                                       
                                       
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                                <!-- Product Info -->
                                <div class="product-single__meta">
                                    <h1 class="product-single__title"><?= $produit->titre ?></h1>
                                    
                                    <!-- Product Price -->
                                    <div class="product-single__price pb-1">
                                        <span class="visually-hidden">Prix</span>
                                        <span class="product-price__sale--single">
                                            <span class="product-price-old-price"><?= $produit->prix ?>€</span>  
                                        </span>
                                            
                                        <div class="product__policies fw-normal mt-1">TTC</div>
                                    </div>
                                    <!-- End Product Price -->
                                    
                                    
                                <!-- End Product Info -->
                                <!-- Product Form -->                                   
                                  
                                    <!-- Product Action -->
                                    <form method="post" action="index.php?p=panier.add" class="product-form hidedropdown">
                                    <input type="hidden" name="idProduit" id="idProduit" class="form-control" value="<?=$produit->id;?>">
                                    <input type="hidden" name="prix" id="prix" class="form-control" value="<?=$produit->prix;?>">
                                    <input type="hidden" name="titre" id="titre" class="form-control" value="<?=$produit->titre;?>">
                                    <div class="product-action w-100 clearfix">
                                        <div class="product-form__item--quantity d-flex-center mb-3">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="icon an an-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" name="nbr" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="icon an an-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                            <div class="pro-stockLbl ms-3">
                                                <span class="d-flex-center stockLbl instock"><i class="icon an an-check-cil"></i><span> En stock</span></span>
                                                <span class="d-flex-center stockLbl outstock "><i class="icon an an-times-cil"></i></span>
                                               
                                            </div>
                                        </div>
                                        <div class="product-form__item--submit">
                                            <button type="submit" name="add" class="btn rounded product-form__cart-submit"><span>Ajouter au panier</span></button>
                                            
                                        </div>
                                        <div class="product-form__item--buyit clearfix">
                                            <button  href="?p=checkout.cart" type="button" class="btn rounded btn-outline-primary proceed-to-checkout"
                                            >Acheter maintenant</button>
                                        </div>
                                       
                                    </div>
                                    </form>
                                    <!-- End Product Action -->
                                    
                                <!-- End Product Form -->
                               
                            </div>
                        </div>
                    </div>
                    <!--Product Content-->

                    

                    <!--Product Tabs-->
                    <div class="tabs-listing mt-2 mt-md-5">
                       
                        <div class="tab-container">
                           
                            <div id="description" class="tab-content">
                                <div class="product-description">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 mb-4 mb-md-0">
                                           
                                            <h4 class="pt-2 text-uppercase">description</h4>
                                            <p><?= $produit->description ?></p>
                                            
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            

                            
                            </div>

                            

                           
                        </div>
                    </div>
                    <!--End Product Tabs-->
                </div>
                <!--End Container-->

                <!--You May Also Like Products-->
                <section class="section product-slider pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="section-header col-12">
                                <h2 class="text-transform-none">Vous pourriez aimer</h2>
                            </div>
                        </div>
                        <div class="productSlider grid-products">
                            <?php foreach ($produitAimer as $produit) { ?>
                            <div class="item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="?p=product.detail&id=<?= $produit->id;?>" class="product-img">
                                        <!-- image -->
                                        <img class="" src="img/upload/<?= $produit->img; ?>"  alt="<?= $produit->titre; ?>" >
                                        <!-- End image -->
                                       
                                       
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0  d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i></a></li>
                                            <!--End Cart Button-->
                                           
                                            <!--Wishlist Button-->
                                            <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i></a></li>
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
                                        <a href="?p=product.detail&id=<?= $produit->id;?>"><?= $produit->titre;?></a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        
                                        <span class="price"><?= $produit->prix;?>€</span>
                                    </div>
                                    <!--End Product Price-->
                                  
                                   
                                </div>
                                <!--End Product Details-->
                            </div>
                            <?php } ?>
                            
                            
                            
                        </div>
                    </div>
                </section>
                <!--End You May Also Like Products-->

                <!--Recently Viewed Products-->
                <section class="section product-slider pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="section-header col-12">
                                <h2 class="text-transform-none">Dans la même collection</h2>
                            </div>
                        </div>
                        <div class="productSlider grid-products">
                            <?php foreach ($memeCollection as $collection) {?>
                            <div class="item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="?p=product.detail&id=<?= $produit->id; ?>" class="product-img">
                                        <!-- image -->
                                        <img class="" src="img/upload/<?= $produit->img; ?>"  alt="<?= $produit->titre; ?>" >
                                        <!-- End image -->
                                       
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0  d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l"></i></a></li>
                                            <!--End Cart Button-->
                                           
                                            <!--Wishlist Button-->
                                            <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i></a></li>
                                            <!--End Wishlist Button-->
                                           
                                        </ul>
                                    </div>
                                    <!--End Product Button-->   
                                </div>
                                <!--End Product Image-->
                                <!--Start Product Details-->
                                <div class="product-details text-center">
                                    <!--Product Name-->
                                    <div class="product-name">
                                        <a href="?p=product.detail&id=<?= $produit->id; ?>"><?= $produit->titre; ?></a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price"><?= $produit->prix; ?>€</span>
                                    </div>
                                    <!--End Product Price-->
                                   
                                   
                                </div>
                                <!--End Product Details-->
                            </div>
                            <?php } ?>
                            
                    
                        </div>
                    </div>
                </section>
                <!--End Recently Viewed Products-->

               
            </div>
            <!--End Body Container-->
           </div>