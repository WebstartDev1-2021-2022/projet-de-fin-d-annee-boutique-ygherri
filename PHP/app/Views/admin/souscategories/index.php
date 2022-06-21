 <div id="page-content">
        <div class="container">
<h1 class="title-admin">Administrer les catégories</h1>

<p>
    <a href="?p=admin.souscategories.add" class="btn btn-add">Ajouter</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Titre</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($items as $category): ?>
        <tr>
            <td><?= $category->id; ?></td>
            <td><?= $category->titre; ?></td>
            <td>
                <a class="btn btn-edit" href="?p=admin.souscategories.edit&id=<?= $category->id; ?>">Editer</a>
                <form action="?p=admin.souscategories.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $category->id ?>">
                    <button type="submit" class="btn btn-delete">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        </div></div>