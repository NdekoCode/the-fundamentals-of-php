<?php


require_once("./setup.php");

$prenom = "Marc";
$nom = "Doe";
$eleves = [
    [
        "nom" => "Marc",
        "prenom" => "Louis",
        "notes" => [1, 12, 15]
    ],
    [
        "nom" => "Jean",
        "prenom" => "Doe",
        "notes" => [12, 13, 15]
    ]
];
foreach ($eleves as $elv) {
    dump($elv);
}
die();
dump($name);
