<?php
$note = (int)readline("Entrer vote note \n");
if ($note > 12) {
    if ($note === 14) {
        echo "Vous avez juste la moyenne";
    } else {
        print "Bravo vous avez la moyenne\n";
    }
} else {
    print "Desoler, vous n'avez pas la moyenne\n";
}
