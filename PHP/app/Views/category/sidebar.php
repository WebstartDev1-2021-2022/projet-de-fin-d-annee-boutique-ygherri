 <?php 
         $categories = App::getInstance()->getTable('Category')->all();
?>
<!--Sidebar-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 sidebar filterbar">
                            
                            <div class="sidebar_tags">
                                <!--Categories-->
                                <div class="sidebar_widget categories filterBox filter-widget">
                                    <div class="widget-title"><h2 class="mb-0">Catégories</h2></div>
                                    <div class="widget-content filterDD">
                                        <ul class="clearfix sidebar_categories mb-0">
                        <?php foreach ($categories as $categorie) {
                                                                                
                          ?>
                             <li class="lvl-1 sub-level"><a href="#;" class="site-nav"><?= $categorie->titre;?></a>
                     <?php $sousCategories =  App::getInstance()->getTable('SousCategory')->subCategoryById($categorie->id);
                        ?>
                                                            <ul class="sublinks">
                                                                 <?php 
                        foreach ($sousCategories as $sousCategorie) {
                            ?>
                             <li  class="level2">
                            <a href="?p=category.subCategory&id=<?= $sousCategorie->id;?>" class="site-nav"><?= $sousCategorie->titre?> </a>
                          </li>
                            <?php 
                        }
                         ?>
                                                               
                                                              </ul>
                                                        </li>
                                                            <?php }  ?>
                                                           
                                                      
                                                   
                                                   
                                                </ul>
                                            
                                    </div>
                                </div>
                                <!--Categories-->
                                
                               
                               
                                
                                
                              
                               
                            </div>
                        </div>
                        <!--End Sidebar-->