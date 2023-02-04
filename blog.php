<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Mon blog";
loadFile("header", data: compact('title',));
?>
<h1>Mon blog</h1>
<?php

loadFile("footer");
?>