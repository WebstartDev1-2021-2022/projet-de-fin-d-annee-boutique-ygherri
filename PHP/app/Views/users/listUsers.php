<div id="page-content">
        <div class="container">
            <h1> les utilisateurs</h1>

<p>
    <a href="?p=users.add" class="btn btn-add">Ajouter</a>
</p>

<table class="table">
    <thead>
    <tr>
        <td>ID</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>E-mail</td>
        <td>Admin</td>
        <td>Actions</td>
    </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->id; ?></td>
            <td><?= $user->firstname; ?></td>
            <td><?= $user->lastname; ?></td>
            <td><?= $user->email; ?></td>
            <td><?php if($user->role == 'ROLE_ADMIN') { echo 'Oui'; }  else { echo 'Non'; }?></td>
            <td>
                <a class="btn btn-edit" href="?p=users.edit&id=<?= $user->id; ?>">Editer</a>
                <form action="?p=users.delete" method="post" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $user->id ?>">
                    <button type="submit" class="btn btn-delete">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        </div>        </div>