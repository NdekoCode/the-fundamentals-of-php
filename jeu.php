<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Deviner un nombre";
$aDeviner = 150;
loadFile("header", data: compact('title'));

printIt($_GET);
dump($_GET);
$value = null;
$error = null;
$success = null;
if (isset($_GET['chiffre'])) {
    $value = (int) htmlentities($_GET['chiffre']);
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

<form action="/jeu.php" method="GET" class="d-flex align-items-center">
    <div class="">
        <input type="number" value="<?= $value ?>" name="chiffre" class="form-control rounded-0 rounded-start">
    </div>
    <button class="rounded btn btn-primary rounded-0 rounded-end">Deviner</button>
</form>
<?php

loadFile("footer");
?>