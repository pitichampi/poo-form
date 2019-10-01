<?php


class Personnage
{
    private $nom;
    private $vie;
    private $attaque;
    private $defense;
    protected $arme;
    protected $armure;

    public function getW($w){
        $this->arme = $w;
        echo '<br>XXXXXXXXXXXXXXX<br>';
        echo $this->nom.' équipe '.$w->nom.'<br>';
        return $this;
    }
    public function getS($s){
        $this->armure = $s;
        echo '<br>[][][][][][][][]<br>';
        echo $this->nom.' équipe '.$s->nom.'<br>';
        return $this;
    }

    public function fight($adversaire){
        $life=$adversaire->getVie();
        $def=$adversaire->getDef();
        $att=$this->getAtt();
        $damage=$att-$def;
        if ($damage > 0){
            $adversaire->setVie($life-$damage);
        }
        echo '<br>******<br>'. $this->getNom(). ' attaque '.$adversaire->getNom().' avec ' .$damage. ' dommages<br>';
        return $this;
    }

    public function setNom($nom){
        $this->nom = $nom;
        echo 'Bienvenue à toi '.$nom.' !<br>';
        return $this;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getClass(){
        return $this->class;
    }
    public function setVie($vie){
        $this->vie=$vie;
        return $this;
    }

    public function getVie(){
        return $this->vie;
    }

    public function setAtt($att){
        $this->attaque=$att;
        return $this;
    }

    public function getAtt(){
        $att=$this->attaque;
        if(isset($this->arme)){
            $att=$att+$this->arme->attaque;
        }
        return $att;
    }

    public function setDef($def){
        $this->defense=$def;
        return $this;
    }
    public function getDef(){
        $def=$this->defense;
        if(isset($this->armure)){
            $def=$def+$this->armure->defense;
        }
        return $def;
    }

    public function __toString()
    {
        $out='<br>---------<br>';
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
        $out.='<br>';
        return $out;
    }

    public function __construct($name)
    {
        $this->setNom($name);
    }


}