<?php
// Tant Que, Pour, Pour chaque
$number = null;
// Redemander l'utilisateur un nombre tant que le nombre taper est different de 10
while ($number !== 10) {
    $number = (int)readline("Entrer un nombre ");
    if ($number === 10) {
        print "Bravo, vous avez entrer 10\n";
    }
}
