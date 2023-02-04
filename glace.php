<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Composer une glace";
loadFile("header", data: compact('title'));
$total = 0;

// checkbox
$parfums = [
    "Fraise" => 4,
    "Chocolat" => 5,
    "Vanille" => 3
];

// Radio
$cornets = [
    "Pot" => 2,
    "Cornet" => 3
];

// checkbox
$supplements  = [
    "Pepites de chocolat" => 1,
    "Chantilly" => 0.5
];
if (isset($_GET['parfum'])) {

    foreach ($parfums as $parfum => $price) {
        if (in_array($parfum, $_GET['parfum'])) {
            $total += $price;
        }
    }
}

if (isset($_GET['cornet'])) {

    foreach ($cornets as $cornet => $price) {
        if ($cornet === $_GET['cornet']) {
            $total += $price;
        }
    }
}

if (isset($_GET['supplement'])) {

    foreach ($supplements as $supplement => $price) {
        if (in_array($supplement, $_GET['supplement'])) {
            $total += $price;
        }
    }
}
?>
<h1>Composer votre glace</h1>
<div class="row">
    <div class="col-md-8">

        <form action="/glace.php" method="GET">

            <div class="mb-3">
                <h3>Votre parfum</h3>

                <?php foreach ($parfums as $parfum => $price) : ?>
                    <div class="mb-1 d-flex">
                        <input type="checkbox" id="<?= $parfum ?>" name="parfum[]" value="<?= $parfum ?>" class="form-check me-1" <?= isset($_GET['parfum']) && in_array($parfum, $_GET['parfum']) ? 'checked' : '' ?>><label for="<?= $parfum ?>"> <?= $parfum ?> </label> <strong>&puncsp; <?= $price ?>€ </strong><br />
                    </div>
                <?php endforeach; ?>

            </div>
            <div class="mb-3">
                <h3>Votre cornet</h3>
                <?php foreach ($cornets as $cornet => $price) : ?>
                    <div class="mb-1 d-flex">
                        <input type="radio" id="<?= $cornet ?>" name="cornet" value="<?= $cornet ?>" class="form-check me-1" <?= isset($_GET['cornet']) && ($cornet === $_GET['cornet']) ? 'checked' : '' ?>><label for="<?= $cornet ?>"> <?= $cornet ?> </label> <strong>&puncsp; <?= $price ?>€ </strong><br />
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="mb-3">
                <h3>Vos supplements</h3>

                <?php foreach ($supplements as $supplement => $price) : ?>
                    <div class="mb-1 d-flex">
                        <input type="checkbox" id="<?= $supplement ?>" name="supplement[]" value="<?= $supplement ?>" class="form-check me-1" <?= isset($_GET['supplement']) && in_array($supplement, $_GET['supplement']) ? 'checked' : '' ?>><label for="<?= $supplement ?>"> <?= $supplement ?> </label> <strong>&puncsp; <?= $price ?>€ </strong><br />
                    </div>
                <?php endforeach; ?>

            </div>
            <button class="rounded btn btn-primary rounded-0 rounded-end">Composer votre glace</button>
        </form>
    </div>
    <div class="col-md-4">
        <h3>Total</h3>
        <p><strong><?= $total ?></strong> €</p>
    </div>
</div>
<h2>$_POST</h2>
<?php
printIt($_POST); ?>
<h2>$_GET</h2>
<?php
dump($_GET); ?>
<?php

loadFile("footer");
?>