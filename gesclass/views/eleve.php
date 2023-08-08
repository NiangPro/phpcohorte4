<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">

                Liste des eleves
            </div>
            <div class="col-md-4 text-right">
                <a href="?page=eleve&type=add" class="btn btn-sm btn-outline-success">Ajouter</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Tel</th>
                    <th>Classe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($eleves as $e): ?>
                <tr>
                    <td><?= ucfirst($e->prenom) ?></td>
                    <td><?= ucfirst($e->nom) ?></td>
                    <td><?= $e->adresse ?></td>
                    <td><?= $e->tel ?></td>
                    <td><?= $e->nomclasse ?></td>
                    <td>
                        <a href="?page=eleve&type=edit&id=<?= $e->id ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-eye"></i></a>
                        <a href="?page=eleve&delete=<?= $e->id ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>