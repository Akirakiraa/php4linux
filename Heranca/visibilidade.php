<?php

class MinhaClasse
{
    protected $protegida = 'Protegida';
    public $publica = 'Publica';
    private $privada = 'Privada';

    function mostraPropriedades()
    {
        echo $this->publica;
        echo $this->privada;
        echo $this->protegida;
    }
}
class MinhaClasseFilha extends MinhaClasse
{
    function mostraPropriedades()
    {
        echo $this->publica;
        echo $this->privada;
        echo $this->protegida;
    }
}
$obj = new MinhaClasse();
$obj2 = new MinhaClasseFilha();
$obj->mostraPropriedades();
$obj2->mostraPropriedades();
//echo $obj->publica;
//echo $obj->privada;
//echo $obj->protegida;