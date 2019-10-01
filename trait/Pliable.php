<?php

namespace materiel;

interface  Pliable
{
    //public $attribut = 0  <----- INTERDIT dans une interface
    const PIED = 4; // Par contre les constantes on a le droit même si là ça sert pas à grand chose...

    public function plier();

    public function deplier();

    /*
     * public function toto(){foo} <---- INTERDIT aussi. On ne met que des fonctions vides.
     */


}