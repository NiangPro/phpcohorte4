<?php 


class Personne{
    // les proprietes 
    public $prenom;
    public $nom;
    public $sexe;
    public $adresse;
    // constructeur 
    public function __construct($p, $n, $s, $a)
    {
        $this->prenom = $p;
        $this->nom = $n;
        $this->sexe = $s;
        $this->adresse = $a;
    }
    // les methodes (actions)
    public function affiche(){
        echo "
            Prenom: $this->prenom <br>
            Nom: $this->nom <br>
            Adresse: $this->adresse <br>
            Sexe: $this->sexe <br>
        
        ";
    }
}


class Etudiant extends Personne{
    public $code;

    public function __construct($p, $n, $s, $a, $c)
    {
        parent::__construct($p, $n, $s, $a);
        $this->code = $c;
    }
    public function affiche2(){
        $this->affiche();
        echo "Code: $this->code <br>";
    }
}

$p1 = new Personne("Bassirou", "Niang", "Masculin", "pikine");

$et = new Etudiant("Modou", "Ndiaye", "Masc", "mbour","4567dhhd");

echo $et->affiche2();



echo $p1->affiche();