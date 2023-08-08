<? require_once("views/eleveController.php"); ?>
<div class="card col-md-8 container">
    <div class="card-header">
        <div class="row">
            <h3 class="col-md-8">Formulaire d'<?= isset($_GET["id"])?'edition':'ajout' ?></h3>
            <div class="col-md-4 text-right">
                <a href="?page=eleve" class="btn btn-outline-info">Retour</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
              <label for="">Prenom <span class="text-danger">*</span></label>
              <input type="text" name="prenom" value="<?= isset($e)? $e->prenom:'' ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">NOm</label>
              <input type="text" name="nom" value="<?= isset($e)? $e->nom:'' ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Adresse</label>
              <input type="text" name="adresse" value="<?= isset($e)? $e->adresse:'' ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Numero de telephone</label>
              <input type="text" name="tel" value="<?= isset($e)? $e->tel:'' ?>" id="" class="form-control" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Classe</label>
              <select name="idclasse" id="" class="form-control">
                <option value="">Veuillez selectionner une classe</option>
                <?php foreach($classes as $c): ?>
                    <option <?= isset($e) && $e->idclasse==$c->id ?'selected': '' ?> value="<?= $c->id ?>"><?= $c->nom ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <?php if(isset($_GET["id"])) : ?>
            <button type="submit" name="editer" class="btn btn-outline-success">Editer</button>
            <?php else : ?>
              <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
            
              <?php endif; ?>
          </form>
    </div>
</div>