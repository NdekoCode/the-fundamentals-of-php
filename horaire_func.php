<?php

declare(strict_types=1);
function demanderCreneau(?string $phrase = "Veuillez entrer un creneau")
{
    $debut = null;
    $fin = null;
    print $phrase . "\n";
    while (true) {

        $debut = (int) readline("Entrer l'heure d'ouverture : \n");
        if ($debut >= 0 || $debut <= 23) {
            break;
        }
        print "Le créneaux ne peut etre enregister car l'heure d'ouverture est incorrect\n";
    }

    while (true) {

        $fin = (int) readline("Entrer l'heure de fermeture: \n");
        if (($fin >= 0 || $fin <= 23) && $debut <= $fin) {
            break;
        }
        print "Le créneaux ne peut etre enregister car l'heure entrer est incorrect \n";
    }
    return [$debut, $fin];
}
function demanderCreneaux(?string $phrase = "Veuiller entrer vos creneaux")
{

    $creneaux = [];
    while (true) {
        $creneaux[] = demanderCreneau($phrase);
        $action = readline("Voulez-vous continuez  (o/n)? \n");
        if ($action === 'n') {
            break;
        }
    }
    return $creneaux;
}
$creneaux = demanderCreneaux("Entrer vos creneaux");
print_r($creneaux);
