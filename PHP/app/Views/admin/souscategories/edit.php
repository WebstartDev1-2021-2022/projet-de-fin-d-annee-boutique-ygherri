         <div id="page-content">
        <div class="container">
<form method="post">
    <?= $form->input('titre', 'Tire de la sous catégorie'); ?>
    <?= $form->select('category_id', 'Catégorie', $categories); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>
        </div>        </div>