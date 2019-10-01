<?php
require 'autoload.php';

$hercule = new Grosbill('Grorcule');
$merlin = new Mago('Mamie Poteur');

echo $hercule;
echo $merlin;

$hercule->fight($merlin);
echo $merlin;

$hache = new Arme('Hache à deux lames',5);
$hercule->getW($hache);
echo $hercule;
$hercule->fight($merlin);
echo $merlin;

$baton = new Arme('Super bâton ultra magique !!!',15);
$chapo = new Armure('Chapeau absorbeur de hache',20);
$merlin->getS($chapo);
$hercule->fight($merlin);
echo '<br>#####################<br>[@Merlin] Mouahahaha elle est en mousse ta hache<br>[@Hercule] ??????<br>';
$hercule->fight($hercule);
echo $hercule;
echo '<br>#####################<br>[@Hercule] Ouilllleeee<br>';
$merlin->getW($baton);
$merlin->fight($hercule);
echo $hercule;
