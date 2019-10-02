<?php

/**
 * Class Arme
 *
 * Permet de faire mal à ses ennemis !
 * On n'a le droit qu'à une seule arme par personne.
 * Si on prend une nouvelle arme, on perd l'ancienne
 * qu'elle soit plus ou moins efficace.
 *
 * @author Pierre [<contact@pitichampi.fr>]
 *
 *
 */
class Arme
{
    public $nom;
    public $attaque;

    /**
     * Arme constructor.
     * @param $nom  Nom de l'arme
     * @param $pow  Puissance de l'arme (augmente d'autant les dégats provoqués)
     */
    public function __construct($nom,$pow)
    {
        $this->nom=$nom;
        $this->attaque=$pow;
    }
}