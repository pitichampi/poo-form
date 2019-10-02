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
try {
    $x = 4;
    $y = 0;
    if ($y == 0) {
        throw new ArithmeticError('Woooooo fais gaffe tu vas faire un trou dans l\'univers !');
    }
    $z = $x / $y;
}
catch (Exception $e){
    echo 'Pokémon "Divide by zero" capturé avec une pokéball :) ';
    echo $e->getMessage();
}
catch (Error $e){
    echo 'Pokémon "Divide by zero" capturé avec une superball :) ';
    echo $e->getMessage();
}
?>


</body>
</html>