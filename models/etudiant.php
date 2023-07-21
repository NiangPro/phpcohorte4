<?php 


class Etudiant extends Personne{
    public $matricule;

    public function __construct($prenom, $nom, $age, $matricule)
    {
        parent::__construct($prenom, $nom, $age);
        $this->matricule = $matricule;

        
    }
    
    public function afficher(){
        $this->afficherInfo();
        echo "Matricule = $this->matricule";
    }
    // public function setAge($age){
    //     $this->age = $age;
    // }

}