<?php 


try {
    $db = new PDO("mysql:dbname=gesclasse;host=localhost", "root", "");
} catch (PDOException $th) {
    die("Erreur: ".$th->getMessage());
}

function getAllClasses(){
    // permet d'utiliser la variable global $db
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM classe");
        $req->execute();

       return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}

function ajoutClasse($nom, $taille){
    global $db;
    try {
        $req = $db->prepare("INSERT INTO classe(nom, taille) VALUES (:nom, :taille)");
        return $req->execute([
            "taille" => $taille,
            "nom" => $nom,
        ]);

        // ou 
        // $req = $db->prepare("INSERT INTO classe(nom, taille) VALUES (?, ?)");
        // $req->execute([$nom,$taille]);

    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}

function getClasseById($id){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM classe WHERE id = :id");
        $req->execute([
            "id" => $id
        ]);

        return $req->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}

function editClasse($id, $nom, $taille){
    global $db;
    try {
        $req = $db->prepare("UPDATE classe SET nom = :nom, taille = :taille
                        WHERE id = :id");
        return $req->execute([
            "nom" => $nom,
            "taille" => $taille,
            "id" => $id
        ]);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}

function removeClasse($id){
    global $db;
    try {
        $req = $db->prepare("DELETE FROM classe WHERE id = :idclasse");
        return $req->execute(["idclasse" => $id]);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}

function getAllEleves(){
    global $db;
    try {
        $req = $db->prepare("SELECT e.id as id, prenom, e.nom  as nom, c.nom as nomclasse, tel, adresse 
                            FROM eleve e, classe c
                            WHERE e.idclasse = c.id");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}

function addEleve($prenom, $nom, $adresse, $tel, $idclasse){
    global $db;

    try {
        $req = $db->prepare("INSERT INTO eleve(prenom, nom, adresse, tel, idclasse)
                                VALUES(:prenom, :nom, :adresse, :tel, :idclasse)");
        return $req->execute([
            "prenom" => $prenom,
            "nom" => $nom,
            "adresse" => $adresse,
            "tel" => $tel,
            "idclasse" => $idclasse,
        ]);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}

function getEleveById($id){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM eleve WHERE id=:id");
        $req->execute([
            "id"=>$id
        ]);

        return $req->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur ".$th->getMessage());
    }
}

function editEleve($id,$prenom,$nom,$adresse,$tel,$idclasse){
    global $db;
    try {
        $req = $db->prepare("UPDATE eleve SET prenom=:prenom,nom=:nom,adresse=:adresse,tel=:tel,idclasse=:idclasse WHERE id=:id");
        return $req->execute([
            "id"=>$id,
            "prenom"=>$prenom,
            "nom"=>$nom,
            "adresse"=>$adresse,
            "tel"=>$tel,
            "idclasse"=>$idclasse
        ]);
    } catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}

function deleteEleve($id){
    global $db;
    try {
        $req =$db->prepare("DELETE FROM eleve WHERE id= :id ");
        return $req->execute([
        "id"=> $id
        ]);
    }  catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}

function seconnecter($email, $mdp){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM user WHERE email=:email AND mdp=:mdp");
        $req->execute([
            "email" => $email,
            "mdp" => $mdp
        ]);
        return $req->fetch(PDO::FETCH_OBJ);
    }  catch (PDOException $e) {
        die("Erreur ".$e->getMessage());
    }
}