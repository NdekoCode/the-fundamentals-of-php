<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Deviner un nombre";
$aDeviner = 150;
loadFile("header", data: compact('title'));

$value = null;
$error = null;
$success = null;
if (isset($_POST['chiffre'])) {
    $value = (int) htmlentities($_POST['chiffre']);
    if ($value > $aDeviner) {
        $error = "Votre chiffre est trop grand";
    } elseif ($value < $aDeviner) {
        $error = "Votre chiffre est trop petit";
    } else {
        $success = "Bravo 👏 vous avez trouver le chiffre $value";
    }
}
?>
<h1>Deviner un nombre</h1>
<?php if ($error) : ?>
    <div class="alert alert-danger"><?= $error ?></div>
<?php elseif ($success) : ?>
    <div class="alert alert-success"><?= $success ?></div>
<?php endif; ?>

<form action="/jeu.php" method="POST" class="d-flex align-items-center">
    <div class="">
        <input type="number" value="<?= $value ?>" name="chiffre" class="form-control rounded-0 rounded-start">
    </div>
    <button class="rounded btn btn-primary rounded-0 rounded-end">Deviner</button>
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