<?php
$note = (int)readline("Entrer vote note \n");
if ($note > 12) {
    if ($note === 14) {
        echo "Vous avez juste la moyenne\n";
    } else {
        print "Bravo vous avez la moyenne\n";
    }
} else {
    print "Desoler, vous n'avez pas la moyenne\n";
}

$action = readline("Entrer votre action : ");
switch ($action) {
    case 1:
        echo "Attaquer\n";
        break;
    case 2:
        echo "Defendre\n";
        break;
    case 3:
        echo "Passer mon tour\n";
        break;
    default:
        echo "Vous n'avez rien choisis comme choix\n";
}
$heure = (int)readline("Entrer une heure : ");
// Le magasin ouvre entre 09h et midi et ensuite entre 14h et 17h
if (($heure >= 9 && $heure < 12) || ($heure >= 14 && $heure <= 17)) {
    print "Le magasin est ouvert\n";
} else {
    print "Le magasin est fermer\n";
}
