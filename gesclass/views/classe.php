<div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="col-md-8">Liste des classes</h3>
                    <div class="col-md-4 text-right">
                        <a href="?page=classe&type=add" class="btn btn-success">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Taille</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php //foreach($classes as $c){ ?>
                        <?php foreach($classes as $c): ?>
                        <tr>
                            <!-- <td><?php //echo ucfirst($c->nom) ?></td> -->
                            <td><?= ucfirst($c->nom) ?></td>
                            <td><?= $c->taille ?></td>
                            <td>
                                <a href="?page=classe&type=edit&id=<?= $c->id ?>" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                <a href="?page=classe&delete=<?= $c->id ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        <!-- <?php //} ?> -->
                    </tbody>
                </table>
            </div>
        </div>