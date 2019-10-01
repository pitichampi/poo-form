<?php


namespace materiel;
require 'Pliable.php';

class Chaise implements Pliable //, Pliable2, Toto... <--- On peut implémenter plusieurs interfaces ainsi
{
    public $matiere = 'bois';

    public function plier()
    {
        echo '<br>Griiiiiik';
    }

    public function deplier()
    {
        echo '<br>Brrrooooooo';
    }
}
