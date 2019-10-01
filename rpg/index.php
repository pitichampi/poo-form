<?php
require 'autoload.php';
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Fighter Turbo X 12 HD 365 perfect edition</title>
    <style>
        h1 {
            text-align: center;
        }

        #game {
            background-color: black;
            padding: 15px;
            column-count: 3;
            color: white;
        }

        div, blockquote {
            margin: 5px;
            padding: 10px;
            break-inside: avoid;
        }

        .getw {
            background-color: sienna;
            color: white;
        }

        .gets {
            background-color: teal;
            color: white;
        }

        .fight {
            background-color: darkred;
            border: 5px orange dashed;
            color: yellow;
        }

        .welcome {
            background-color: green;
            border: 3px double greenyellow;
            color: greenyellow;
            text-transform: uppercase;
        }

        .perso {
            font-family: monospace;
            background-color: navajowhite;
            color: dimgrey;
        }

        blockquote {
            background-color: white;
            color: black;
            font-family: cursive;
        }


    </style>
</head>
<body>
<h1>Super Fighter Turbo X 12 HD 365 perfect edition</h1>
<div id="game">
    <?php
    $hercule = new Grosbill('Grorcule');
    echo $hercule;
    $merlin = new Mago('Mamie Poteur');
    echo $merlin;

    $hercule->fight($merlin);
    echo $merlin;

    $hache = new Arme('Hache à deux lames', 5);
    $hercule->getW($hache);
    echo $hercule;
    $hercule->fight($merlin);
    echo $merlin;

    $baton = new Arme('Super bâton ultra magique !!!', 15);
    $chapo = new Armure('Chapeau absorbeur de hache', 20);
    $merlin->getS($chapo);
    echo $merlin;
    $hercule->fight($merlin);
    echo '<blockquote>[@Merlin] Mouahahaha elle est en mousse ta hache<br>[@Hercule] ??????<br></blockquote>';
    $hercule->fight($hercule);
    echo $hercule;
    echo '<blockquote>[@Hercule] Ouilllleeee<br></blockquote>';
    $merlin->getW($baton);
    echo $merlin;
    $merlin->fight($hercule);
    echo $hercule;
    ?>
</div>
</body>
</html>

