<?php
namespace materiel;

abstract class SupportDeCours
{
    protected $auteur;
    protected $titre;

    public function __construct($title,$author)
    {
        $this->auteur=$author;
        $this->titre=$title;
    }

    abstract function imprimer();

    public function setTitre($title){
        $this->titre=$title;
        return $this;
    }

    public function setAuteur($author){
        $this->auteur=$author;
        return $this;
    }


}