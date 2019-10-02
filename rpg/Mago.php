<?php
/**
 * Class Mago
 *
 * Le mago est faible mais malin...
 *
 * @author Pierre [<contact@pitichampi.fr>]
 *
 *
 */

class Mago extends Personnage
{
    protected $class = 'Mago';

    /**
     * Mago constructor.
     * @param $name Nom du Mago
     */
    public function __construct($name)
    {
        parent::__construct($name);
        $this->setDef(rand(3,6));
        $this->setAtt(rand(1,4));
        $this->setVie(rand(18,22));
    }
}
