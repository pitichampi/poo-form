<?php

class Arme
{
    public $nom;
    public $attaque;

    public function __construct($nom,$pow)
    {
        $this->nom=$nom;
        $this->attaque=$pow;
    }
}