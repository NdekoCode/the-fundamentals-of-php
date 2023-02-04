<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Deviner un nombre";
$aDeviner = 150;
loadFile("header", data: compact('title'));

printIt($_GET);
?>
<h1>Deviner un nombre</h1>
<form action="/jeu.php" method="GET" class="d-flex align-items-center">
    <div class="">
        <input type="number" name="chiffre" class="form-control rounded-0 rounded-start">
    </div>
    <button class="rounded btn btn-primary rounded-0 rounded-end">Deviner</button>
</form>
<?php

loadFile("footer");
?>