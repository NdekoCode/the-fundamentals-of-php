<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "libs" . DIRECTORY_SEPARATOR . 'functions.php';
$title = "Page d'acceuil";
$nav = 'index';
loadFile("header", data: compact('title', 'nav'));
?>
<div class="p-5 rounded bg-light">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
    <a class="btn btn-lg btn-primary" href="/index.php" role="button">View navbar docs &raquo;</a>
</div>
<?php
loadFile("footer");
?>