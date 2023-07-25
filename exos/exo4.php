<?php 

$tab = [4, 23, 16, 75, 9];

$tabc = [];


for ($i=0; $i < count($tab) ; $i++) { 
   if(intval(sqrt($tab[$i]))* intval(sqrt($tab[$i])) == $tab[$i]){
        // array_push($tabc, $tab[$i]);
        $tabc[] = $tab[$i];
   }
};


foreach ($tabc as $val) {
    echo $val ." ";
}
