<?php
/**
 * Class Grosbill
 *
 * Le grosbill est un personnage qui tape dur
 * mais un peu con...
 *
 * @author Pierre [<contact@pitichampi.fr>]
 *
 *
 */
class Grosbill extends Personnage
{
    protected $class = 'Grosbill';

    /**
     * Grosbill constructor.
     * @param string $name Nom du Grosbill
     */
    public function __construct($name)
    {
        parent::__construct($name);
        $this->setDef(rand(1,4));
        $this->setAtt(rand(3,6));
        $this->setVie(rand(20,25));
    }
}