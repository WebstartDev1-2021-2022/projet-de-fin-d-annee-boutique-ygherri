<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="description" />

    <title>Mine d'or</title>
    
    <link rel="icon" href="images/M.png" />    

    <link rel="stylesheet" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A');?>" />
    <link rel="stylesheet" href="css/responsive.css?<?php echo date('l jS \of F Y h:i:s A');?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/plugins.css?<?php echo date('l jS \of F Y h:i:s A');?>" />
    
  </head>

  <body class="body-index index-homepage">
   
    <div class="page-wrapper">
      <!--Header-->

      <header
        id="header"
        class="header header-main d-flex align-items-center header-2 header-border"
      >
        <div class="container">
          <div class="row">
            <!--Logo / Menu Toggle-->
            <div
              class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center justify-content-start d-flex"
            >
              <!--Logo-->
              <div class="logo">
                <a href="index.php"><img src="images/logo-mine.png" > </a>
                
              </div>
              <!--End Logo-->
            </div>
            <!--End Logo / Menu Toggle-->
            <!--Main Navigation Desktop-->
            <div
              class="col-1 col-sm-1 col-md-1 col-lg-6 align-self-center d-menu-col"
            >
             <?php include 'menu.php' ;?>
            </div>
            <!--End Main Navigation Desktop-->
            <!--Right Action-->
            <div id="right-menu-items"
              class="col-6 col-sm-6 col-md-6 col-lg-3 align-self-center icons-col text-right d-flex"
            >
              <!--Search-->
             
              <div class="site-search iconset">
                <i class="icon an an-search-l"></i>
              </div>
              <!--End Search-->
              <!--Wishlist-->
              <div class="wishlist-link iconset">
                <a href="?p=wishlist.index"
                  ><i class="icon an an-heart-l icon-black"></i>
                </a>
              </div>
              <!--End Wishlist-->

              <!--Minicart Drawer-->
              <div class="header-cart iconset">
                <?php if (isset($_SESSION['panier']) ) { ?>
              <button type="button" class="btn remove-icon close-btn" data-bs-toggle="tooltip" data-bs-placement="top" >
                <?php echo count($_SESSION['panier']['produit']);?>
              </button>
              <?php } ?>
                <a
                  href="?p=panier.index"
                  class="site-header__cart btn-minicart"
                  
                 
                >
                  <i class="icon an an-cart-l icon-black"></i>
                </a>
              </div>

              <!--End Minicart Drawer-->
             
              <!--Setting Dropdown-->
              <div class="user-link iconset">
              <?php if (isset($_SESSION['user'])) {  ?>
                  <!-- <span class="welcome"> Bienvenue, <?php echo $_SESSION['user']->firstname . " " .$_SESSION['user']->lastname ;?></span> -->
              
              <nav class="grid__item" id="AccessibleNav">
                <ul id="siteNav" class="site-nav medium center hidearrow">
                    <li class="lvl1 parent dropdown_nav"><?php echo $_SESSION['user']->firstname . " " .$_SESSION['user']->lastname ;?>
                <ul class="dropdown  dropdown-right">
                  <?php  if($_SESSION['user']->role == 'ROLE_ADMIN') { ?>
                <li class="lvl1 parent dropdown_nav"><a  href="?p=admin.categories.index">Gestion des catégories</a></li>
                <li class="lvl1 parent dropdown_nav"><a  href="?p=admin.produits.index">Gestion des produits</a></li>
                  <li class="lvl1 parent dropdown_nav"><a  href="?p=users.listUsers">Gestion des utilisateurs</a></li>
                   <li class="lvl1 parent dropdown_nav"><a  href="?p=users.account">Gestion des commandes</a></li>

                <?php } ?>
                <li class="lvl1 parent dropdown_nav"><a  href="?p=users.account">Gérer mon compte</a></li>
                
                <li class="lvl1 parent dropdown_nav"><a  href="?p=users.logout">Déconnexion</a></li>
                </ul>
                </li>
              </ul>
              </nav>
              <?php } else { ?>
          <a href="?p=users.login" class="connexion">Connexion</a>
          <?php }?>
              </div>
              <!--End Setting Dropdown-->
            </div>
            <!--End Right Action-->
          </div>
        </div>
        <?php 
         $categories = App::getInstance()->getTable('Category')->all();
?>
      <div class="nav-mobile">
      <a
        class=""
        type="button"
        id="dropdownMenu2"
        data-bs-toggle="dropdown"
        aria-expanded="false"
      >
     <img src="images/menu-icon.png" alt="menu">
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a class="dropdown-item" href="index.php" >Acceuil</a></li>

                              <?php foreach ($categories as $categorie) {
                          ?>
                           <li><a class="dropdown-item" href="?p=category.index&id=<?= $categorie->id;?>" ><?= $categorie->titre;?></a></li>
        <li>
  <?php 
                        } 
                         ?>
                     <?php if (isset($_SESSION['user'])) {  ?>
                        <li><a class="dropdown-item"   href="?p=users.logout">Déconnexion</a><</li>

                      <?php } else {
                        ?>
                        <li><a class="dropdown-item"  href="?p=users.login">Connexion</a></li>

                        <?php 
                      } ?>  
         
      </ul>
    </div>
      </header>
      <!--End Header-->
     

      <!--Body Container-->
    <?= $content ?>
      <!--End Body Container-->

      <!--Footer-->
      <div class="footer footer-2">
        <div class="footer-top clearfix">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                <h4 class="h4">Informations</h4>
                <ul>
                  <li><a href="#">Histoire</a></li>
                  <li>
                    <a href="#"
                      >Les engagements responsables</a
                    >
                  </li>
                  <li><a href="#">Abonnement à la newsletter</a></li>
                  <li><a href="?p=footer.cgv">CGV</a></li>
                  <li><a href="?p=footer.mentions">Mentions légales</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-2 footer-links">
                <h4 class="h4">Services</h4>
                <ul>
                  <li><a href="#">Services de retours</a></li>
                  <li><a href="#">Information de livraison</a></li>
                  <li><a href="#">Service clients</a></li>
                  <li><a href="#">offres</a></li>
                  <li><a href="?p=footer.contact">Nous contacter</a></li>
                </ul>
              </div>
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 footer-contact">
                <img src="images/logo-mine.png" href="index.php">
                <p class="address d-flex align-items-center">
                  <i class="an an-map-marker-al"></i> 55 rue de Chantilly, Paris
                  75000.
                </p>
                <p class="phone d-flex align-items-center">
                  <i class="an an-phone-l"></i> <b class="me-1">Phone:</b> (+33)
                  000 000 0000
                </p>
                <p class="email d-flex align-items-center">
                  <i class="an an-envelope-l"></i>
                  <b class="me-1">Email:</b> contact@minedor.com
                </p>
                <ul class="list-inline social-icons mt-3">
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Facebook"
                      ><i class="an an-facebook" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Twitter"
                      ><i class="an an-twitter" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Pinterest"
                      ><i class="an an-pinterest-p" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Instagram"
                      ><i class="an an-instagram" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="TikTok"
                      ><i class="an an-tiktok" aria-hidden="true"></i
                    ></a>
                  </li>
                  <li class="list-inline-item">
                    <a
                      href="#"
                      data-bs-toggle="tooltip"
                      data-bs-placement="top"
                      title="Whatsapp"
                      ><i class="an an-whatsapp" aria-hidden="true"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="row"></div>
          </div>
        </div>
      </div>
      <!--End Footer-->

      <!--Scoll Top-->
      <span id="site-scroll"><i class="icon an an-arw-up"></i></span>
      <!--End Scoll Top-->

     
      <div class="modalOverly"></div>

      <!--Newsletter Popup-->
<div id="popup-modal" class="modal">
<div class="modal-content animated bounce">
<a class="modal-close">×</a>
<div class="modal-img">
<img src="images/logo-mine.png" alt=""/>
</div>
<div class="modal-text">
<h2>S'inscrire à la Newsletter pour recevoir nos dernières offres</h2>

</div>
<div class="modal-footer">
<form action="https://feedburner.google.com/fb/a/mailverify" method="post"
onsubmit='window.open("https://feedburner.google.com/fb/a/mailverify?uri=softwebtuts/NiEc",
"popupwindow", "scrollbars=yes,width=550,height=520"); return true' target="popupwindow">
<input type="text" class="modal-input" placeholder="Adresse E-mail"/>
<input type="submit" class="modal-submit-btn" value="Valider"/>
</form>
</div>
</div> 
</div>
<script >
var modal = document.getElementById('popup-modal');
var btn = document.getElementById("open-popup-modal");
var span = document.getElementsByClassName("modal-close")[0];

span.onclick = function() {
$.cookie("closed", true);
modal.style.display = "none";
}
window.onload = function() {
    if(!$.cookie("closed")){

setTimeout(function() {
modal.style.display = 'block';
}, 3000);
 }
}
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "block";
}
}
</script>
      <!--End Newsletter Popup-->

      <!-- Including Jquery -->
      <script src="js/jquery-min.js?<?php echo date('l jS \of F Y h:i:s A');?>"></script>
      <script src="js/js.cookie.js?<?php echo date('l jS \of F Y h:i:s A');?>"></script>
      <script src="js/plugins.js?<?php echo date('l jS \of F Y h:i:s A');?>"></script>
     
    
      <script src="js/main.js?<?php echo date('l jS \of F Y h:i:s A');?>"></script>

    </div>
    <!--End Page Wrapper-->
  </body>
</html>
