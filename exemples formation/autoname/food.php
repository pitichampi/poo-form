<?php
namespace Food;  // <=> namespace Food{ ... }   on choisi une notation mais pas les deux.

require ('Apple.php');
require('Orange.php');

//////////////////////////////////
    /*use Apples;
    use Oranges;*/

    \Apples\eat();
    Oranges\eat();
//////////////////////////////////
/*
\Apples\eat();
\Oranges\eat();*/

/////////////////////////////////
use AFRIQUE\MAROC;
    MAROC\Oranges\eat();

?>
