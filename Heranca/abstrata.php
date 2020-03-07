<?php

class BarulhoDeCarro
{
    public function getBarulho($nomeDoCarro)
    {
        return "{$nomeDoCarro}, Fazendo Barulho ";
    }
}

class Carro extends BarulhoDeCarro
{
    public function Acelerar()
    {
        return 'Brum Bruum';
    }
}

//puxando as funcoes
$ford = new Carro;
echo $ford->getBarulho('Fiesta');
echo $ford->Acelerar();

//teste primeiro get barulho
//$obj = new BarulhoDeCarro();
//echo $obj->getBarulho('Fiesta');