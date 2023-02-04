<?php
function demanderCreneau($phrase = "Veuillez entrer un creneau")
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
function demanderCreneaux($phrase = "Veuiller entrer vos creneaux")
{

    $creneaux = [];
    echo "$phrase \n";
    while (true) {
        $debut = (int)readline("Entrer l'heure de debut : \n");
        $fin = (int)readline("Entrer l'heure de fin : \n");
        if ($debut >= $fin) {
            print("Le creneaux ne peut etre enregistrer car l'heure de fin est inferieur à l'heure de debut \n");
        } elseif (($debut >= 0 && $debut <= 23) && ($fin >= 0 && $fin <= 23)) {
            $creneaux[] = [$debut, $fin];
            $action = readline("Voulez-vous continuez  (o/n)? \n");
            if ($action === 'n') {
                break;
            }
        } else {
            print "L'heure entrer est incorrect \n";
        }
    }
    return $creneaux;
}
// $creneaux = demanderCreneau();
// $creneaux2 = demanderCreneau("Entrer votre creneau");
$creneaux = demanderCreneaux("Entrer vos creneaux");
print_r($creneaux);
