<?php

class Avo
{
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function mostraNome()
    {
        return $this->nome;
    }
}

//Teste pra mostrar nomes avo
//$avo1 = new Avo('Maria');
//$avo2 = new Avo('Ana');
//echo $avo1->mostraNome();
//echo '<br>';
//echo $avo2->mostraNome();


class Mae extends Avo
{

    public function __construct($nome,$idade)
    {
        parent::__construct($nome);
        return $this->idade = $idade;
    }

    public function mostraIdade()
    {
        return $this->idade;
    }
}

//Testes feitos pra mostrar mae
//$mae = new Mae('Joana',40);
//echo $mae->mostraNome();
//echo $mae->mostraIdade();

//Classe FINAL significa que nao podera ter mais heranca
//a partir da Filha
final class Filha extends Mae
{
    public function __contruct($nome,$idade,$genero)
    {
    parent::__construct($nome,$idade);
    $this->genero = $genero;
    }
    public function mostraGenero()
    {
        return $this->genero;
    }
}
