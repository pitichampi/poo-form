<?php

class Grosbill extends Personnage
{
    protected $class = 'Grosbill';

    public function __construct($name)
    {
        parent::__construct($name);
        $this->setDef(rand(1,4));
        $this->setAtt(rand(3,6));
        $this->setVie(rand(20,25));
    }
}