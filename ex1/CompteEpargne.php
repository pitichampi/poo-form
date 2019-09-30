<?php

require_once 'CompteB.php';

class CompteEpargne extends CompteB
{

    private $taux;

    public function __construct($number,$tx,$sold=false)
    {
        parent::__construct($number);
        $this->taux=$tx;
        if($sold){
        $this->setSolde($sold);
        }
    }
    public function getTaux(){
        return $this->taux;
    }
    public function setTaux($tx){
        $this->taux=$tx;
        return $this;
    }
    public function depot($val)
    {
        $this->setSolde($this->getSolde()+$val+5);
        echo 'compte n°'.$this->getNumero().' crédité de '.$val.' + 5 offerts :)<br>';
        echo $this;
        return $this;
    }


}