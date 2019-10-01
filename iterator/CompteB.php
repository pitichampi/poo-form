<?php


class CompteB
{
    private $numero;
    private $solde;



    public function __construct($number)
    {
        $this->numero=$number;
        $this->solde = 0;
        echo 'compte n°'.$number.' créé !<br>';
    }
    public function __toString()
    {
        return 'Compte n°'.$this->numero.' - Solde : '.$this->solde.'<br>******* Fin d\'opération *******<br>';
    }

    public function setNumero($num){
        $this->numero = $num;
        return $this;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function getSolde(){
        return $this->solde;
    }

    public function setSolde($sold){
        $this->solde = $sold;
        return $this->solde;
    }
    public function depot($val){
        $this->solde=$this->solde+$val;
        echo 'compte n°'.$this->numero.' crédité de '.$val.'<br>';
        echo $this;
        return $this;
    }
    public function retrait($val){
        if($this->solde-$val <0){
            echo '<span style="color:red"> Opération refusée</span>, trop pauvre :/<br>';
        }else{
            $this->solde=$this->solde-$val;
            echo 'compte n°'.$this->numero.' débité de '.$val.'<br>';
        }
        echo $this;
        return $this;
    }
}