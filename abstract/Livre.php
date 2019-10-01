<?php


namespace materiel;
require 'SupportDeCours.php';

class Livre extends SupportDeCours
{
    public function imprimer()
    {
        echo '**** IMPRESSION EN COURS *****<br>';
        echo '* '.$this->titre.'<br>';
        echo '* '.$this->auteur.'<br>';
        echo '******************************<br>';
    }
}