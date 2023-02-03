<?php

function say_yes_non($q)
{
    $answer = readline("$q (o/n)\n");
    if ($answer === 'o') {
        return true;
    }
    return false;
}

$result  = say_yes_non("Voulez vous continuer ?\n");
var_dump($result);
