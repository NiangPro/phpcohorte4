<?php

$nbre = 6;

$cpt = 0;
$som = 0;
$fact = 1;
$affiche = '';

for ($i=1; $i < $nbre; $i++) { 
    if($nbre % $i == 0){
        $cpt++;
        $som += $i;
    }

    $fact *= $i;
    $affiche .= $i."x";
}

$fact *= $nbre;
$affiche .= $nbre;

if ($cpt == 1 || $nbre == 1) {
    echo "$nbre est un nombre premier <br>";
}else{
    echo "$nbre n'est pas un nombre premier <br>";
}

if ($som == $nbre) {
    echo "$nbre est un nombre parfait <br>";
}else{
    echo "$nbre n'est pas un nombre parfait <br>";
}

echo "$nbre!= $affiche = $fact";