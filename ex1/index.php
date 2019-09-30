<?php

require 'CompteB.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Bienvenue à la banque toto !</h1>
<?php
$compte=new CompteB(12345);
$compte->depot(10)->retrait(20)->depot(30)->retrait(25);
echo $compte;



?>
</body>
</html>
