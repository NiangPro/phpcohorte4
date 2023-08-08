<?php 

$eleves = getAllEleves();
$classes = getAllClasses();

if(isset($_POST["ajouter"])){
    extract($_POST);
    if(addEleve($prenom, $nom, $adresse, $tel, $idclasse)){
        return header("Location: ?page=eleve");
    }
}


if(isset($_POST["editer"])){
    extract($_POST);
    if(editEleve($_GET["id"],$prenom,$nom,$adresse,$tel,$idclasse)){
        return header("Location:?page=eleve");
    }
}

if(isset($_GET["delete"])){
    if(deleteEleve($_GET["delete"])){
        return header("Location:?page=eleve");
    }
}

if (isset($_GET["type"])) {
    if(isset($_GET["id"])){
        $e = getEleveById($_GET["id"]);
    }
    require_once("views/ajoutEleve.php");
    
}else{

    require_once("views/eleve.php");
}




