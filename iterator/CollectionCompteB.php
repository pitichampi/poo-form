<?php

require 'CompteB.php';

class CollectionCompteB implements Iterator
{
    private $list = array();
    private $position = 0;

    public function current()
    {
        return $this->list[$this->position];
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function key()
    {
        return $this->position;
    }

    public function next()
    {
        $this->position++;
    }

    public function valid()
    {
        return isset($this->list[$this->position]);
    }

    public function add($x)
    {
        $this->list[] = $x;
    }
}

$a=new  CompteB('FR-1'); $a->setSolde(1000);
$b=new  CompteB('FR-2'); $b->setSolde(1001);
$c=new  CompteB('FR-3'); $c->setSolde(1002);

$collec = new CollectionCompteB();
$collec -> add($a);
$collec -> add($b);
$collec -> add($c);


foreach ($collec as $item){
    echo '<br>'.$item->getNumero().' -> '.$item->getSolde();
}