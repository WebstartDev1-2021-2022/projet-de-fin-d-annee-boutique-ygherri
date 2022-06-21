 <!--Main Content-->
      <div class="login-register pt-2 pt-lg-5">
        <div class="row">
          <div class="block">
            <div class="">
            <div class="inner">
              <h3 class="h4 text-uppercase">Nouveau utilisateur ?</h3>
              <p>
                L'inscription à ce site vous permet d'accéder à l'état et à
                l'historique de vos commandes.
              </p>
              <a href="?p=users.inscription" class="rounded btn-signin">Créer un compte</a>
            </div>
          </div>
            <div class="inner">
              <form method="post"  class="customer-form">
                <h3 class="h4 text-uppercase">Déjà inscrit ?</h3>
                <p>Connectez-vous</p>
                <div class="row">
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="CustomerEmail" class="d-none"
                        >Email <span class="required">*</span></label
                      >
                      <?= $form->input('username', 'Pseudo'); ?>
                    </div>
                  </div>
                  <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <label for="CustomerPassword" class="d-none"
                        >Mot de passe <span class="required">*</span></label
                      >
                     <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="text-left col-12 col-sm-12 col-md-12 col-lg-12">
                    <p class="d-flex-center">
                      <input
                        type="submit"
                        class="rounded me-auto btn-connexion width-connexion"
                        value="Connexion"
                      />
                      <a href="#">Mot de passe oublié ?</a>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
        </div>
      </div>
      <!--End Main Content-->