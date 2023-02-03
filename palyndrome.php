<?php
$str = strtolower(readline("Entrer une chaine \n"));

$strReverse = strrev($str);
if ($strReverse === $str) {
    echo "Est un palyndrome\n";
} else {
    echo "N'est pas un palyndrome\n";
}
