<?php
/**
 * Class Armure
 *
 * Permet de réduire les attaques ennemies !
 * On n'a le droit qu'à une seule armure par personne.
 * Si on prend une nouvelle armure, on perd l'ancienne
 * qu'elle soit plus ou moins efficace.
 *
 * @author Pierre [<contact@pitichampi.fr>]
 *
 *
 */

class Armure
{
    public $nom;
    public $defense;

    /**
     * Armure constructor.
     * @param $nom  Nom de l'armure
     * @param $pow  Puissance de l'armure (réduit d'autant les dégats subis)
     */
    public function __construct($nom,$pow)
    {
        $this->nom=$nom;
        $this->defense=$pow;
    }
}
