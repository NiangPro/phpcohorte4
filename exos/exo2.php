<?php 

$chaine = "Je suis une chaine de caracteres";

$nbrevoy = 0;
$nbcons = 0;

$nc = strtolower($chaine);

for ($i=0; $i < strlen($chaine); $i++) { 
    if($nc[$i] == 'a' || $nc[$i] == 'i' || $nc[$i] == 'o' ||$nc[$i] == 'u' ||$nc[$i] == 'e' ||$nc[$i] == 'y'){
        $nbrevoy++;
    }else{
        if($nc[$i] != " "){
            $nbcons++;
        }
    }
}

echo "$chaine comporte : $nbrevoy voyelles et $nbcons consonnes";