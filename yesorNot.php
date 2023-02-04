<?php

function sayYesOrNot($q)
{
    $answer = readline("$q (o/n)\n");
    if ($answer === 'o') {
        return true;
    }
    return false;
}
