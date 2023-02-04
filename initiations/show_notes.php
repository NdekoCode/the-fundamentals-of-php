<?php

$notes = [];
$note = null;
while ($note !== "fin") {
    $note = readline("Entrer une note ou taper \"fin\" : ");
    if ($note !== 'fin') {
        $notes[] = (int)$note;
    }
}
foreach ($notes as $k => $note) {
    print("Notes -$k = $note\n");
}
