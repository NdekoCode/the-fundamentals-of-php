<?php
$note = (int)readline("Entrer vote note \n");
if ($note > 12) {
    if ($note === 14) {
        echo "Vous avez juste la moyenne";
    } else {
        print "Bravo vous avez la moyenne\n";
    }
} else {
    print "Desoler, vous n'avez pas la moyenne\n";
}

$action = readline("Entrer votre action");
switch ($action) {
    case 1:
        echo "Attaquer";
        break;
    case 2:
        echo "Defendre";
        break;
    case 3:
        echo "Passer mon tour";
        break;
    default:
        echo "Vous n'avez rien choisis comme choix";
}
