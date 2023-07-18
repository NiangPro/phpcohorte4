<?php 

echo "<pre>";
$tab = ["modou", "fatou", "sokhna", "massamba"];
$entiers = [23, 0, 34, 90, -5];

// trier 

echo $tab[0];
echo count($tab);
echo $tab[count($tab) - 1];

array_push($tab, "maman");


print_r($tab);
ksort($entiers);
print_r($entiers); 



echo "</pre>";