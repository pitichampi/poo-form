<?php


namespace materiel;
require 'SupportDeCours.php';

class Livre extends SupportDeCours
{
    public function imprimer()
    {
        $lwhitet=27-strlen($this->titre);
        $lwhitea=27-strlen($this->auteur);
        $whitet='';
        for ($i=0; $i<$lwhitet;$i++){
            $whitet.='&nbsp;';
        }
        $whitea='';
        for ($i=0; $i<$lwhitea;$i++){
            $whitea.='&nbsp;';
        }
        echo '**** IMPRESSION EN COURS *****<br>';
        echo '* '.$this->titre.$whitet.'*<br>';
        echo '* '.$this->auteur.$whitea.'*<br>';
        echo '******************************<br>';
    }
}