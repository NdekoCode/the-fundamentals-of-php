<?php

$insults = ['con', 'merde', 'batard', 'connard', 'baiseur', 'putain'];
$sentence = readline("Entrer une phrase: \n");
$sentenceArray = explode(" ", $sentence);

foreach ($insults as $word) {
    $str = $word[0] . str_repeat("*", strlen($word) - 1);
    // Tu vas me chercher ça et tu vas me le remplacer par ça dans ça
    $sentence = preg_replace("/\b$word\b/", $str, $sentence);
}
echo "$sentence\n";
