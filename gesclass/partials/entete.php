<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GesClass</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-info">
        <a class="navbar-brand" href="#">Ges<span class="text-warning">Classe</span></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <?php if(isset($_SESSION["user"])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=profil">Profil</a>
                </li>
            <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=classe">Classe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=eleve">Eleve</a>
                </li>
                <li class="nav-item">
                    <?php if(isset($_SESSION["user"])): ?>
                    <a class="nav-link" href="?page=logout">Deconnexion</a>
                    <?php else: ?>
                    <a class="nav-link" href="?page=login">Connexion</a>
                    <?php endif; ?>
                </li>
                
        </div>
    </nav>

    <div class="container mt-3">