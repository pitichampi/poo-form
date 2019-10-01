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
require 'Livre.php';
use materiel\Livre;
$bouqu1 = new Livre('Le bouqu1','Ursule la crapule');
$bouqu1->imprimer();
?>
</body>
</html>