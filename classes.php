<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is the choice (of object)</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet">
    <style>
        pre {
            background-color: black;
            color: white;
            font-family: 'Source Code Pro', monospace;
            padding: 15px;
        }

        }
    </style>
</head>
<body>

<h1>Yo this is my first hello world in object ;)</h1>
<?php
ini_set('error_reporting', E_ALL);
/*
class MaClasse
{
    public $nom = "MaClasse";
    public $couleur;
}

$a = new MaClasse();
echo 'l\'attribut nom du prem\'s c\'est : ';
echo $a->nom;
echo '<pre>';
var_dump($a);
$a->couleur = 'vert';
var_dump($a);
var_dump($a->couleur);
echo '</pre>';
$a->nom = 'Toto';
echo $a->nom;
echo '<hr>';

class Client
{
    private $nom = 'Tutu';

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($param)
    {
        $this->nom = $param;
    }
}

$cli = new Client();
echo '<pre>';
var_dump($cli->getNom());
$cli->setNom('Tata');
var_dump($cli->getNom());
echo '</pre>';

class Client2
{
    public static $count = 0;
    public const TVA = 19.5;
    private $nom;

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public static function setCount($val)
    {
        self::$count = $val;
    }

    public static function getCount()
    {
        return self::$count;
    }
}

$cli2 = new Client2();
$cli2->setNom('Toto');
$cli2->setCount(1);
echo '<pre>';
var_dump($cli2->getNom());
var_dump($cli2->getCount());
echo '</pre>';
$cli3 = new Client2();
$cli3->setNom('Tutu');
$cli3->setCount(2);
echo '<pre>';
var_dump($cli3->getNom());
var_dump($cli3->getCount());
echo '</pre>';*/


class Client3
{
    private $prenom;
    private $nom;
    private $num;
    public static $count = 0;

    public function __construct($id,$name=false,$prename=false)
    {
        echo 'New client -- ';
        $this->num = $id;
        if($name){
            $this->nom=$name;
        }
        if($prename){
            $this->prenom=$prename;
        }
        $this::$count++;
        echo $this::$count;
    }

    public function __set($name, $value)
    {
        $this->$name=$value;
        echo $name.' set to '.$value;
    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __destruct()
    {
//        echo 'Bouuuuuuumm !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!';
    }


}
$zou=new Client3(666,'tata','suzane');
echo "Client n°".$zou->num.' is '.$zou->nom.' '.$zou->prenom;
$zu=new Client3(888);
?>
</body>
</html>
