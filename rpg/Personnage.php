<?php

/**
 * Class Personnage
 *
 * C'est LA grosse classe de l'application.
 * Elle permet de définir à peu près tout ce
 * qu'il se passe dans le jeu...
 *
 * @author Pierre [<contact@pitichampi.fr>]
 *
 *
 */

class Personnage
{
    private $nom;
    private $vie;
    private $attaque;
    private $defense;
    protected $arme;
    protected $armure;

    /**
     * Le personnage prend une arme
     * @param $w Il s'agit de l'arme que le perso récupère.
     * @return $this Pour chaîner les événements...
     */
    public function getW($w){
        $this->arme = $w;
        echo '<div class="getw">';
        echo $this->nom.' équipe '.$w->nom.'<br></div>';
        return $this;
    }

    /**
     * Le personnage revet une armure
     * @param $s C'est l'armure que le personnage récupère
     * @return $this
     */
    public function getS($s){
        $this->armure = $s;
        echo '<div class="gets">';
        echo $this->nom.' équipe '.$s->nom.'<br></div>';
        return $this;
    }

    /**
     * Et c'est parti pour l'attaque !
     * @param $adversaire C'est le vilain qu'on a décidé de frapper bien fort !
     * @return $this
     */
    public function fight($adversaire){
        $life=$adversaire->getVie();
        $def=$adversaire->getDef();
        $att=$this->getAtt();
        $damage=$att-$def;
        if ($damage > 0){
            $adversaire->setVie($life-$damage);
        }
        echo '<div class="fight">'. $this->getNom(). ' attaque '.$adversaire->getNom().' avec ' .$damage. ' dommages<br></div>';
        return $this;
    }

    /**
     * Permet de donner un nom à son perso.
     * @param $nom  C'est le nom du gus !
     * @return $this
     */
    public function setNom($nom){
        $this->nom = $nom;
        echo '<div class="welcome">Bienvenue à toi '.$nom.' !<br></div>';
        return $this;
    }

    /**
     * Affiche le nom du personnage
     * @return mixed
     */
    public function getNom(){
        return $this->nom;
    }

    /**
     * Affiche la classe du personnage.
     * @return mixed
     */
    public function getClass(){
        return $this->class;
    }

    /**
     * Affecte une valeur à la vie d'un personnage
     * @param $vie  Quantité de vie totale que l'on affecte au personnage
     * @return $this
     */
    public function setVie($vie){
        $this->vie=$vie;
        return $this;
    }

    /**
     * Affiche la vie restante d'un personnage
     * @return mixed
     */
    public function getVie(){
        return $this->vie;
    }

    /**
     * Paramètre la valeur d'attaque d'un personnage
     * @param $att  Valeur d'attaque du personnage (sans son arme)
     * @return $this
     */
    public function setAtt($att){
        $this->attaque=$att;
        return $this;
    }

    /**
     * Affiche la valeur d'attaque d'un personnage (avec son arme)
     * @return mixed
     */
    public function getAtt(){
        $att=$this->attaque;
        if(isset($this->arme)){
            $att=$att+$this->arme->attaque;
        }
        return $att;
    }

    /**
     * Paramètre la valeur de défense d'un personnage
     * @param $def  Valeur de défense du personnage (sans son armure)
     * @return $this
     */
    public function setDef($def){
        $this->defense=$def;
        return $this;
    }

    /**
     * Valeur de défense du personnage (avec son armure)
     * @return mixed
     */
    public function getDef(){
        $def=$this->defense;
        if(isset($this->armure)){
            $def=$def+$this->armure->defense;
        }
        return $def;
    }

    /**
     * Affiche une version html de la fiche du perso.
     * @return string
     */
    public function __toString()
    {
        $out='<div class="perso">';
        $out.='Nom : '.$this->getNom().'<br>';
        $out.='Classe : '.$this->getClass().'<br>';
        $out.='Vie : '.$this->getVie().'<br>';
        $out.='Arme : ';
        if(isset($this->arme)){
           $out.=$this->arme->nom .'(+ ' .$this->arme->attaque. 'att)';
        }else{$out.='Rien :(';}
        $out.='<br>';
        $out.='Armure : ';
        if(isset($this->armure)){
           $out.=$this->armure->nom .'(+ ' .$this->armure->defense. 'def)';
        }else{$out.='Rien :(';}
        $out.='<br></div>';
        return $out;
    }

    /**
     * Personnage constructor.
     * @param $name Nom du personnage
     */
    public function __construct($name)
    {
        $this->setNom($name);
    }


}