<?php

namespace Album{
    
    class Commentaire {

        public $texte;

        public function __toString(){
            return "Album : " . $this->texte;
        }

    }
    
}