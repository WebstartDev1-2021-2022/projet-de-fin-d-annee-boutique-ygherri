  <!--Body Container-->
      <div id="page-content">
      <!-- Carousel -->
<div id="demo" class="carousel slide carousel-fade" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner slide carousel-fade">
    <div class="carousel-item active">
      <img src="images/sliderr1.jpeg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="images/slide33.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="images/slide22.jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

        <!--Best Seller With Tabs-->
        <section class="section product-slider tab-slider-product">
          <div class="container">
            <div class="section-header">
              <h2>Catégories</h2>
            </div>
            <div class="tabs-listing">
              <ul class="tabs clearfix tabs-style2">
                <?php foreach ($categories as $key => $categorie){
                  ?>
                   <li  <?php if($key +1 == 1)  { ?>class="active" <?php } ?>rel="tab<?php echo $key +1 ;?>"><?php echo $categorie->titre ?></li>
                  <?php 
                } ?>
                <!-- <li class="active" rel="tab1">Montres Femmes</li>
                <li rel="tab2">Montres Hommes</li>
                <li rel="tab3" class="tab_last">Bracelets de montres</li> -->
              </ul>
              <div class="tab_container">
                 <?php 
                 foreach ($categories as $key1 => $categorie){
                   ?>
                   <h3
                  class="tab_drawer_heading d_active body-font text-uppercase text-center"
                  rel="tab<?php echo $key1+1;?>"
                >
                  <?php echo $categorie->titre; ?>
                  <i class="an an-angle-down-r" aria-hidden="true"></i>
                </h3>
                  <div id="tab<?php echo $key1+1;?>" class="tab_content">
                 
                  <div class="grid-products">
                    <div class="row">
                       <?php 
                   $produits = App::getInstance()->getTable('Produit')->lastByCategory($categorie->id);
                   foreach ($produits as $produit){
                    ?> 
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
                                  href="?p=product.detail&id=<?= $produit->id;?>"
                                >
                                  <i class="icon an an-cart-l " href="?p=product.detail&id=<?= $produit->id;?>"></i>
                                  
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
                       <?php  
                   }
                  ?>       
                  </div>
                   </div>
                          
                 </div>
                   <?php 
                 }
                   ?>
            
                
               
                
             
              </div>
            </div>
          </div>
        </section>
        <!--End Best Seller With Tabs-->

        <!--Collection Slider Section-->

        <!--Collection Slider Section-->

        <!--Top Picks On Fashion Product Slider-->
        <section class="section product-slider">
          <div class="container">
            <div class="row">
              <div class="section-header col-12">
                <h2>Meillures ventes</h2>
              </div>
             
            </div>
          <div class="productSlider grid-products">
                            <div class="item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="?p=product.detail" class="product-img">
                                        <!-- image -->
                                        <img class="" data-src="//cdn.shopify.com/s/files/1/0059/3035/2743/products/26WR-265_1200x.jpg?v=1615899998" src="//cdn.shopify.com/s/files/1/0059/3035/2743/products/26WR-265_1200x.jpg?v=1615899998" alt="" title="">
                                        <!-- End image -->
                                       
                                       
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0  d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l "></i> </a></li>
                                            <!--End Cart Button-->
                                           
                                            <!--Wishlist Button-->
                                            <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i> </a></li>
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
                                        <a href="?p=product.detail">Montre 1</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        
                                        <span class="price">219.00€</span>
                                    </div>
                                    <!--End Product Price-->
                                   
                                   
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="?p=product.detail" class="product-img">
                                        <!-- image -->
                                        <img class="" data-src="assets/images/products/product-1.jpg" src="//cdn.shopify.com/s/files/1/0059/3035/2743/products/26WR-265_1200x.jpg?v=1615899998" alt="" title="">
                                        <!-- End image -->
                                       
                                    </a>
                                    <!--End Product Image-->

                                   

                                    <!--Product Button-->
                                    <div class="button-set style0  d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l "></i></a></li>
                                            <!--End Cart Button-->
                                           
                                            <!--Wishlist Button-->
                                            <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i> </a></li>
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
                                        <a href="?p=product.detail">Montre 1</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">199.00€</span>
                                    </div>
                                    <!--End Product Price-->
                                   
                                   
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="?p=product.detail" class="product-img">
                                        <!-- image -->
                                        <img class="" data-src="assets/images/products/product-1.jpg" src="//cdn.shopify.com/s/files/1/0059/3035/2743/products/26WR-265_1200x.jpg?v=1615899998" alt="" title="">
                                        <!-- End image -->
                                       
                                    </a>
                                    <!--End Product Image-->
                                    <!--Product Button-->
                                    <div class="button-set style0  d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l "></i></a></li>
                                            <!--End Cart Button-->
                                           
                                            <!--Wishlist Button-->
                                            <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i> </a></li>
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
                                        <a href="?p=product.detail">Montre 1</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">99.00€</span>
                                    </div>
                                    <!--End Product Price-->
                                   
                                   
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="?p=product.detail" class="product-img">
                                        <!-- image -->
                                        <img class="" data-src="assets/images/products/product-1.jpg" src="//cdn.shopify.com/s/files/1/0059/3035/2743/products/26WR-265_1200x.jpg?v=1615899998" alt="" title="">
                                        <!-- End image -->
                                       
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0  d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l "></i></a></li>
                                            <!--End Cart Button-->
                                           
                                            <!--Wishlist Button-->
                                            <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i> </a></li>
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
                                        <a href="?p=product.detail">Montre 1</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">88.00€</span>
                                    </div>
                                    <!--End Product Price-->
                                  
                                   
                                </div>
                                <!--End Product Details-->
                            </div>
                            <div class="item">
                                <!--Start Product Image-->
                                <div class="product-image">
                                    <!--Start Product Image-->
                                    <a href="?p=product.detail" class="product-img">
                                        <!-- image -->
                                        <img class="" data-src="assets/images/products/product-1.jpg" src="//cdn.shopify.com/s/files/1/0059/3035/2743/products/26WR-265_1200x.jpg?v=1615899998" alt="" title="">
                                        <!-- End image -->
                                      
                                    </a>
                                    <!--End Product Image-->

                                    <!--Product Button-->
                                    <div class="button-set style0  d-md-block">
                                        <ul>
                                            <!--Cart Button-->
                                            <li><a class="btn-icon btn cartIcon pro-addtocart-popup" href="#pro-addtocart-popup"><i class="icon an an-cart-l "></i></a></li>
                                            <!--End Cart Button-->
                                           
                                            <!--Wishlist Button-->
                                            <li><a class="btn-icon wishlist add-to-wishlist" href="?p=wishlist.index"><i class="icon an an-heart-l"></i> </a></li>
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
                                        <a href="?p=product.detail">Montre 1</a>
                                    </div>
                                    <!--End Product Name-->
                                    <!--Product Price-->
                                    <div class="product-price">
                                        <span class="price">39.20€</span>
                                    </div>
                                    <!--End Product Price-->
                                   
                                   
                                </div>
                                <!--End Product Details-->
                            </div>
                        </div>
  
  
        </section>
        <!--End Top Picks On Fashion Product Slider-->

        <!--Parallax Banner-->

        <!--End Parallax Banner-->
        <div class="row">
         
        </div>
        <!--Store Feature-->
        <section class="store-features style1 py-0">
          <div class="container">
            <div class="row store-info">
              <div class="col mb-3 my-sm-3 text-center icon-homepage">
                <img class="icon-homepage" src="images/livraison-rapide.png" alt="">
                <h5 class="body-font h5-bandeau">Livraison Offerte</h5>
                <p class="sub-text">à partir de 50€</p>
              </div>
              <div class="col mb-3 my-sm-3 text-center icon-homepage">
                <img class="icon-homepage" src="images/diamond.png" alt="">
                <h5 class="body-font h5-bandeau">Produits de qualité</h5>
                <p class="sub-text">Haute gamme</p>
              </div>
              <div class="col mb-3 my-sm-3 text-center icon-homepage">
                <img class="icon-homepage" src="images/credit-card.png" alt="">
                <h5 class="body-font h5-bandeau">Paiement sécurisé</h5>
                <p class="sub-text">100%</p>
              </div>
              <div class="col mb-3 my-sm-3 text-center icon-homepage">
                <img class="icon-homepage" src="images/soutien.png" alt="">
                <h5 class="body-font h5-bandeau">Assistance dédiée</h5>
                <p class="sub-text">24/7 Service Clients</p>
              </div>
            </div>
          </div>
        </section>
        <!--End Store Feature-->

        <!--Instagram Section-->
        <div
          class="col-12 col-sm-12 col-md-6 col-lg-6 newsletter-col mt-4 mt-lg-5"
        >
          <div class="display-table pe-lg-3">
            <div class="display-table-cell footer-newsletter">
              <form action="#" method="post" class="h4">
                <label class="text_news">Newsletter</label>
                <p class="p_h4">
                  Inscrivez-vous à notre newsletter et ne manquez rien de nos
                  offres !
                </p>
                <div class="input-group">
                  <input
                    type="email"
                    class="input-group__field newsletter-input"
                    name="EMAIL"
                    value=""
                    placeholder="Email address"
                    required
                  />
                  <span class="input-group__btn">
                    <button
                      type="submit"
                      class="btn newsletter__submit"
                      name="commit"
                    >
                      Valider
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--End Instagram Section-->
      </div>
     
      <!--End Body Container-->