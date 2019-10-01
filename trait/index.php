<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//require 'Chaise.php';
require 'autoload.php';
use materiel\Chaise;
$chaise = new Chaise();
$chaise->peindre("red");
echo '<div class="chaise" style="color:' .$chaise->couleur. '">';
$chaise->plier();
$chaise->deplier();
echo '</div>';
?>
</body>
</html>
