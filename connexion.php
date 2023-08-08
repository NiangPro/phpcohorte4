<?php 
    // $db = new PDO("mysql:dbname=gesClasse;host=localhost", "root", "");
try {
    $db = new PDO("mysql:dbname=gesClasse;host=localhost", "root", "");
} catch (PDOException $e) {
    die("Erreur : ".$e->getMessage());
}


function getClasses(){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM classe");
        $req->execute();

        return $req->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage());
    }
}

// if ($db) {
//     die("Connexion avec succes");
// }else{
//     die("Erreur de connexion");
// }
echo "<pre>";
$classes = getClasses();

echo $classes[1]->nom;

print_r($classes);

echo "</pre>";
