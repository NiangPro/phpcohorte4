<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <fieldset class="container col-md-8">
        <legend>Inscription</legend>
        <form action="models/traitement.php" method="post">
            <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Date de naissance</label>
                    <input type="date" name="datenais" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Lieu de naissance</label>
                    <input type="text" name="lieunais" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Tel</label>
                    <input type="text" name="tel" class="form-control">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Pays</label>
                    <select name="pays" id="" class="form-control">
                        <option value="Senegal">Senegal</option>
                        <option value="Mali">Mali</option>
                        <option value="Guinee">Guinee</option>
                        <option value="Mauritanie">Mauritanie</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Sexe</label> <br>
                    <label for="" class="radio-inline">M<input type="radio" name="sexe"  value="Masculin"></label>
                    <label for="" class="radio-inline">F<input type="radio" name="sexe"  value="Feminin"></label>
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Adresse</label>
                    <input type="text" name="adresse" class="form-control">
                </div>
            </div>
            <div class="btn-group mt-3">
                <button type="submit" class="btn btn-outline-success">Ajouter</button>
                <button type="reset" class="btn btn-outline-danger">Annuler</button>
            </div>
        </form>
    </fieldset>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

<?php 


?>