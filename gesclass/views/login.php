<?php if($message): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong><?= $message ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>
<div class="card container col-md-4">
    <div class="card-header bg-info text-center text-white">
        Connexion
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="mdp" class="form-control">
            </div>
            <button name="login" class="btn btn-outline-success" type="submit">Se connecter</button>
        </form>
    </div>
</div>