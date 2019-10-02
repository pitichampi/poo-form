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
    <link rel="icon" href="data:image/png;base64,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">
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
    echo '<blockquote>[@'.$merlin->getNom().'] Mouahahaha elle est en mousse ta hache<br>[@'.$hercule->getNom().'] ??????<br></blockquote>';
    $hercule->fight($hercule);
    echo $hercule;
    echo '<blockquote>[@'.$hercule->getNom().'] Ouilllleeee<br></blockquote>';
    $merlin->getW($baton);
    echo $merlin;
    $merlin->fight($hercule);
    echo $hercule;


    ?>



</div>
</body>
</html>

