<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Deviner un nombre";
$aDeviner = 150;
loadFile("header", data: compact('title'));

printIt($_GET);
dump($_GET);
$chiffre = isset($_GET['chiffre']) ? (int)htmlentities($_GET['chiffre']) : null;
?>
<h1>Deviner un nombre</h1>
<?php if ($chiffre) : ?>
    <?php if ($chiffre > $aDeviner) : ?>
        <div class="alert alert-danger">Le chiffre est trop grand</div>
    <?php elseif ($chiffre < $aDeviner) : ?>
        <div class="alert alert-danger">Le chiffre est trop petit</div>
    <?php else : ?>
        <div class="alert alert-success">Bravo vous avez trouver le chiffre</div>
    <?php endif; ?>

<?php endif; ?>
<form action="/jeu.php" method="GET" class="d-flex align-items-center">
    <div class="">
        <input type="number" value="<?= $chiffre ?>" name="chiffre" class="form-control rounded-0 rounded-start">
    </div>
    <button class="rounded btn btn-primary rounded-0 rounded-end">Deviner</button>
</form>
<?php

loadFile("footer");
?>