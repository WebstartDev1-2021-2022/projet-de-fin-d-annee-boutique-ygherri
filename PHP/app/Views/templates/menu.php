 <?php 
         $categories = App::getInstance()->getTable('Category')->all();
?>
 <!--Desktop Menu-->
              <div class="row">
                <div
                  class="col-1 col-sm-12 col-md-12 col-lg-12 align-self-center d-menu-col"
                >
                  <!--Desktop Menu-->
                  <nav class="grid__item" id="AccessibleNav">
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                      <?php foreach ($categories as $categorie) {
                          ?>
                          <li class="lvl1 parent dropdown_nav">
                              <a href="?p=category.index&id=<?= $categorie->id;?>"
                          ><?php echo $categorie->titre;?> <i class="an an-angle-down-l"></i
                        ></a>
                        <?php $sousCategories =  App::getInstance()->getTable('SousCategory')->subCategoryById($categorie->id);
                        ?>
                         <ul class="dropdown">
                             <?php 
                        foreach ($sousCategories as $sousCategorie) {
                            ?>
                             <li>
                            <a href="?p=category.subCategory&id=<?= $sousCategorie->id;?>" class="site-nav"><?php echo $sousCategorie->titre?> </a>
                          </li>
                            <?php 
                        }
                         ?>
                        
                          
                      </ul>
                      </li>
                          <?php 
                      } ?>  
                    </ul>
                  </nav>
                  <!--End Desktop Menu-->
                </div>
              </div>
              <!--End Desktop Menu-->