<?php 


if(isset($_POST["ajouter"])){
    extract($_POST);

    if(ajoutClasse($nom, $taille)){
        return header("Location:?page=classe");
    }
}

if(isset($_POST["modifier"])){
    extract($_POST);
    if(editClasse($_GET["id"], $nom, $taille)){
        return header("Location: ?page=classe");
    }
}

if (isset($_GET["delete"])) {
    if(removeClasse($_GET["delete"])){
        return header("Location: ?page=classe");
    }
}

if (isset($_GET["type"])) {
    if ($_GET["type"] == "edit") {
        $c = getClasseById($_GET["id"]);
        require_once("views/editclasse.php");
    }else{
        require_once("views/ajoutClasse.php");
    }
    
}else{
    require_once("views/classe.php");
}
