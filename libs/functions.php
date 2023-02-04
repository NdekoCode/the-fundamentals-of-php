<?php

declare(strict_types=1);
function demanderCreneau(?string $phrase = "Veuillez entrer un creneau"): array
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
function demanderCreneaux(?string $phrase = "Veuiller entrer vos creneaux"): array
{

    $creneaux = [];
    while (true) {
        $creneaux[] = demanderCreneau($phrase);
        $action = sayYesOrNot("Voulez-vous continuez  (o/n)? \n");
        if (!$action) {
            break;
        }
    }
    return $creneaux;
}

function sayYesOrNot($q)
{
    $answer = readline("$q (o/n)\n");
    if ($answer === 'o') {
        return true;
    }
    return false;
}
function loadFile($file, $dir = "partials", array $data = ["title" => "Mon site"])
{
    extract($data);
    return  require dirname(__DIR__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . "$file.php";
}

function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}


function printIt($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
