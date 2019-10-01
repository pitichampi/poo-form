<?php


class Armure
{
    public $nom;
    public $defense;

    public function __construct($nom,$pow)
    {
        $this->nom=$nom;
        $this->defense=$pow;
    }
}