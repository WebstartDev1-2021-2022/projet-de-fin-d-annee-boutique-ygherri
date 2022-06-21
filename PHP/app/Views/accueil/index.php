 <div class="grid-products">
                    <div class="row">
                      <div class="col-6 col-sm-6 col-md-4 col-lg-3 item">
                        <!-- start product image -->
                        <div class="product-image">
                          <!-- start product image -->
                          <a href="?p=product.detail&id=<?php echo $produit->id;?>" class="product-img">
                            <!-- image -->
                            <img
                              class="" src="img/upload/<?= $produit->img; ?>"
                              
                              alt="image"
                              title=""
                            />
                            <!-- End image -->
                          </a>
                          <!-- end product image -->

                          <!--Product Button-->
                          <div class="button-set style2">
                            <ul>
                              <li>
                                <!--Cart Button-->
                                <a
                                  class="btn-icon btn btn-addto-cart pro-addtocart-popup"
                                  href="?p=checkout.cart"
                                >
                                  <i class="icon an an-cart-l" href="?p=product.detail&id=<?= $produit->id;?>"></i>
                                  
                                </a>
                                <!--end Cart Button-->
                              </li>
                              <li></li>
                              <li>
                                <!--Wishlist Button-->
                                <a
                                  class="btn-icon wishlist add-to-wishlist"
                                  href="?p=wishlist.index"
                                >
                                  <i class="icon an an-heart-l"></i>
                                 
                                </a>
                                <!--End Wishlist Button-->
                              </li>
                              <li></li>
                            </ul>
                          </div>
                          <!--End Product Button-->
                        </div>
                        <!-- end product image -->
                        <!--start product details -->
                        <div class="product-details text-left">
                          <!-- product name -->
                          <div class="product-name">
                            <a class="name-color" href="?p=product.detail&id=<?php echo $produit->id;?>">
                            <?php echo $produit->titre;?></a>
                          </div>
                          <!-- End product name -->
                          <!-- product price -->
                          <div class="product-price">
                            
                            <span class="price"><?php echo $produit->prix;?>€</span>
                          </div>
                          <!-- End product price -->
                         
                        </div>
                        <!-- End product details -->
                      </div>
                  </div>