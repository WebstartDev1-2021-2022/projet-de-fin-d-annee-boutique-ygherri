<form method="post" enctype="multipart/form-data">

    <?= $form->input('titre', 'Titre de l\'article'); ?>

    <?= $form->input('img', 'image du produit', ['type' => 'file']); ?>

    <?= $form->input('description', 'description', ['type' => 'textarea']); ?>

    <?= $form->input('prix', 'prix', ['type' => 'number']); ?>

    <?= $form->select('category_id', 'Catégorie', $categories); ?>

    <?= $form->select('sous_category_id', 'Sous catégorie', $sousCategories); ?>

    <button class="btn btn-add">Sauvegarder</button>
</form>