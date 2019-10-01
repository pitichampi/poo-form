<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        html{
            font-family: 'Source Code Pro', monospace;
        }
    </style>
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