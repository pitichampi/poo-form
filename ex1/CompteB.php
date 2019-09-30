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
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Bienvenue à la banque toto !</h1>
<?php
$compte=new CompteB(12345);
$compte->depot(10)->retrait(20)->depot(30)->retrait(25);
echo $compte;



?>
</body>
</html>
