<?php
require_once("./setup.php");
$notes = [
    [
        "prenom" => "Gloire", "nom" => "Mutaliko", "notes" => [12, 10, 15], "class" => "CM1"
    ], [
        "prenom" => "Cedric", "nom" => "Kahungu", "notes" => [2, 30, 15], "class" => "CM2"
    ], [
        "prenom" => "Valentin", "nom" => "Nasibu", "notes" => [18, 10, 15], "class" => "CM1"
    ]
];
$classes = [
    "cm1" => ["Jean", "Marc", "Mario"],
    "cm2" => ["Emilie", "Marcelin"],
    "cm3" => ["Cedric", "Joy"]
];
for ($i = 0; $i < 5; $i++) {
    print "- $i \n";
}
foreach ($classes as $classe => $eleves) {
    echo "Class $classe\n";
    foreach ($eleves as $eleve) {
        print " $eleve\n";
    }
}
foreach ($notes as $k => $v) {
    print("{$v['prenom']} {$v['nom']} \n");
}
