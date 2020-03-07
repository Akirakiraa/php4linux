<?php

class Animal
{ 
    protected $tipo = 'Animal';

    public function getTipo(){
        return $this->tipo;
    }
}

class Gato extends Animal
{ 
    protected $tipo = 'Gato';
}

$animal = new Animal;
$gato = new Gato;

echo $animal->getTipo();
echo $gato->getTipo();