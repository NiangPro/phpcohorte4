<?php 

// elle permet d'inclure une page dans une autre 
require_once("etudiant.php");

class Personne{
    // les proprietes 
    public $prenom;
    public $nom;
    private $age;


    // constructeur 
    public function __construct($prenom, $nom , $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }

    // les methodes 
    public function afficherInfo(){
        echo "
            Prenom : $this->prenom <br>
            Nom : $this->nom <br>
            Age : $this->age ans <br>
        ";
    }
}


// $p1 = new Personne();

// $p1->prenom = "Modou";
// $p1->nom = "Ndiaye";

$et = new Etudiant("Astou", "Fall", 35, "ETU45647");


$et->afficher();
