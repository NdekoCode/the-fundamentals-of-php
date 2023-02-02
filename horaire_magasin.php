<?php
require_once "./setup.php";
// On demande à l'utilisateur de rentrer les horaires d'ouverture d'un magasin en partant du principe que les mangasin est ouvert au meme heure du lundi au vendredi
// On demande à l'utilisateur de rentrer l'heure de debut et l'heure de fin et ensuite de lui demander s'il va rentrer une autre plage horaire
// Une fois que l'utilisateur entre une heure on lui dira si le magasi est ouvert ou s'il est fermer
$heure_user = null;
$debut;
$fin;
$creneaux = [];
$action = null;
while (true) {
    $debut = (int) readline("Entrer l'heure de debut du creneaux : \n");
    $fin = (int) readline("Entrer l'heure de fin du creneaux : \n");
    if ($debut >= $fin) {
        print "Le créneaux ne peut etre enregister car le l'heure de debut ($debut) est supérieur à l'heure de fin ($fin)\n";
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Voulez-vous enregistrez un nouveau creneaux (o/n)?\n");
        if ($action === 'n') {
            break;
        }
    }
}
$heure = (int)readline("A quelle heure voulez-vous visiter le magasin ?\n");
$message = '';
$creneauTrouver = false;
foreach ($creneaux as $k => $creneau) {
    if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneauTrouver = true;
        $message = "Le magasin est ouvert de $creneau[0]h à $creneau[1]h";
        if ($k >= 1) {
            $message .= " et de $creneau[0]h à $creneau[1]";
        } else {
            break;
        }
    }
}
if ($creneauTrouver) {
    print "Le magasin sera ouvert \n";
    echo "$message\n";
} else {
    print "Le magasin sera fermer\n";
    echo "$message\n";
}
