<?php 
echo "<pre>";
// print_r($_POST);
extract($_POST);

echo "
    Prenom: $prenom <br>
    Nom: $nom <br>
    Adresse: $adresse <br>
    Date de naisssance: $datenais <br>
    Lieu de naissance: $lieunais <br>
    Tel: $tel <br>
    Sexe: $sexe <br>
    Pays: $pays <br>

";


// echo "La page de traiment";

// $nom = "Bassirou";

// $_tab = ["aliou", "pathe", "samba"];

// $_tabkeys = [
//         "prenom" => "Bassirou",
//         "nom" => "Fall",
//         "age" => 35
//     ];

//     extract($_tabkeys);

//     echo $prenom." ".$nom;
    
    
    // echo $_tabkeys["prenom"];
    
    // array_pop($_tab);
    // array_unshift($_tab, "fatim", "bachir");
    
    // print_r($_tab);
    
    // // unset($nom);
    
    // if (isset($nom)) {
        //     echo "cette variable existe";
        // }else{
            //     echo "cette variable n'existe pas";
            // }
            
            // // echo strlen($nom);
            // // echo $_tab[count($_tab) - 1];
            // // echo strlen($_tab[count($_tab) - 1]);


            echo "</pre>";