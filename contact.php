<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Nous contacter";
$nav = "contact";
// printIt($_SERVER);
loadFile("header", data: compact('title', 'nav'));
?>
<h1>Nous contacter</h1>
<?php

loadFile("footer");
?>