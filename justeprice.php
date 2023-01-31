<?php
// Tant Que, Pour, Pour chaque
$nbr_secret = rand(1, 100);
$score = 3;
$number = null;
// Redemander l'utilisateur un nombre tant que le nombre taper est different de 10
while ($number !== 10 && $score > 0) {
    $number = (int)readline("Entrer un nombre entre 1 et 100 : ");
    if ($number > 10) {
        print "Le nombre est trop grand\n";
    } elseif ($number <= 10) {
        print "Le nombre est trop petit\n";
    }
    $score--;
}
if ($number === $nbr_secret) {

    print "Bravo, vous avez entrer 10\n";
} else {
    print "Vous avez perdus, le nombre secret etait $nbr_secret\n";
}
