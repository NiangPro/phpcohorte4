<?php

$mot = "Isi";

if (strtolower(strrev( $mot)) == strtolower($mot)) {
    echo "le mot  $mot est un palyndrome";

}else {
    echo "le mot  $mot n'est pas un palyndrome";
}

?>