<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Composer une glace";
loadFile("header", data: compact('title'));

$value = null;
?>
<h1>Composer votre glace</h1>

<form action="/glace.php" method="POST">
    <div class="mb-1">
        <input type="checkbox" name="parfum[]" value="Fraise" class="form-check">Fraise
    </div>
    <div class="mb-1">
        <input type="checkbox" name="parfum[]" value="Vanille" class="form-check">Vanille
    </div>
    <div class="mb-1">
        <input type="checkbox" name="parfum[]" value="Chocolat" class="form-check">Chocolat
    </div>
    <button class="rounded btn btn-primary rounded-0 rounded-end">Composer votre glace</button>
</form>
<h2>$_POST</h2>
<?php
printIt($_POST); ?>
<h2>$_GET</h2>
<?php
dump($_GET); ?>
<?php

loadFile("footer");
?>