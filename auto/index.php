<?php

function chargeClass($className){
    /*
     * ça c'est de moi paske je pensais qu'il fallait différencier le slash et l'antislash
    $include=explode('\\', $className);
    $inc='x'.$include[0].'/'.$include[1].'.php';
    include $inc;
    */
    include 'x'.$className.'.php'; // (ça marche aussi)
}
spl_autoload_register('chargeClass');
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AutoLoad</title>
</head>
<body>
<?php
echo '<h1>Zou !</h1>';
$a = new Blog\Commentaire();
$a->texte='lorem ipsum';
echo $a;
?>
</body>
</html>
